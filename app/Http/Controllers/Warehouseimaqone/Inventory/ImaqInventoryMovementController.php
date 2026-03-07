<?php

namespace App\Http\Controllers\Warehouseimaqone\Inventory;

use App\Models\Rol;
use App\Models\User;
use App\Models\Imaqsize;
use App\Models\Imaqbrand;
use App\Models\Inventory;
use App\Models\Imaqumedida;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use App\Models\Imaqprovider;
use Illuminate\Http\Request;
use App\Models\Imaqlevelarea;
use App\Models\Imaqproductsat;
use App\Models\Imaqsatunidadkey;
use App\Models\Imaqtypematerial;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;


class ImaqInventoryMovementController extends Controller
{
    /**
     * Entrada de inventario
     */
    public function storeIn(Request $request)
    {
        $request->validate([
            'product_inventory_id' => 'required|exists:imaq_products_inventory,id',
            'quantity' => 'required|numeric|min:0.01',
            'reference' => 'nullable|string|max:255',
        ]);

        ImaqInventoryMovement::create([
            'product_inventory_id' => $request->product_inventory_id,
            'type' => 'IN',
            'quantity' => $request->quantity,
            'reference' => $request->reference,
        ]);

        return back()->with('success', 'Entrada registrada');
    }

    /**
     * Salida de inventario
     */
    public function storeOut(Request $request)
    {
        $request->validate([
            'product_inventory_id' => 'required|exists:imaq_products_inventory,id',
            'quantity' => 'required|numeric|min:0.01',
            'reference' => 'nullable|string|max:255',
        ]);

        $stock = ImaqInventoryMovement::where('product_inventory_id', $request->product_inventory_id)
            ->select(DB::raw('SUM(CASE WHEN type="IN" THEN quantity ELSE -quantity END) as stock'))
            ->value('stock');

        if ($stock < $request->quantity) {
            return back()->withErrors(['quantity' => 'Stock insuficiente']);
        }

        ImaqInventoryMovement::create([
            'product_inventory_id' => $request->product_inventory_id,
            'type' => 'OUT',
            'quantity' => $request->quantity,
            'reference' => $request->reference,
        ]);

        return back()->with('success', 'Salida registrada');
    }

    /**
     * Stock por clave (IMAQ 1, IMAQ 2 y total)
     */
    public function stockByClave($clave)
    {
        $products = ImaqProductInventory::where('clave', strtoupper($clave))
            ->with('division')
            ->get();

        $stockByDivision = [];

        foreach ($products as $product) {
            $stock = ImaqInventoryMovement::where('product_inventory_id', $product->id)
                ->select(DB::raw('SUM(CASE WHEN type="IN" THEN quantity ELSE -quantity END) as stock'))
                ->value('stock');

            $stockByDivision[] = [
                'division' => $product->division->name,
                'stock' => $stock ?? 0,
            ];
        }

        $total = collect($stockByDivision)->sum('stock');

        return view('imaq.stock.by_clave', compact(
            'clave',
            'stockByDivision',
            'total'
        ));
    }
}

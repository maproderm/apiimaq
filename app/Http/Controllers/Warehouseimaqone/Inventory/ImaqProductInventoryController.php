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
use App\Models\ImaqProductInventory;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;


class ImaqProductInventoryController extends Controller
{
    /**
     * Listado de productos
     */
    public function index()
    {
        $products = ImaqProductInventory::with([
                'division:id,name',
                'category:id,name',
                'umedida:id,name'
            ])
            ->orderBy('clave')
            ->get();

        return view('admin.warehouseimaqone.inventory.index', compact('products'));
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        return view('admin.warehouseimaqone.inventory.create', [
            'divisions' => Division::all(),
            'categories' => ImaqCategory::where('status', 1)->get(),
            'units' => ImaqUnitOfMeasurement::all(),
            'materials' => ImaqTypeOfMaterial::all(),
            'sizes' => ImaqSize::all(),
        ]);
    }

    /**
     * Guardar producto
     */
    public function store(Request $request)
    {
        // Normalizar clave
        $request->merge([
            'clave' => strtoupper($request->clave),
        ]);

        $request->validate([
            'clave' => [
                'required',
                'string',
                'max:100',
                Rule::unique('imaq_products_inventory')
                    ->where(fn ($q) => $q->where('division_id', $request->division_id)),
            ],
            'name' => 'required|string|max:255',
            'division_id' => 'required|exists:imaq_division,id',
            'category_id' => 'required|exists:imaq_categories,id',
            'unit_of_measurement_id' => 'required|exists:imaq_unit_of_measurement,id',
            'type_of_material_id' => 'required|exists:imaq_type_of_material,id',
            'size_id' => 'required|exists:imaq_size,id',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        // Validación CLAVE: categoría pertenece a la división
        $category = ImaqCategory::find($request->category_id);

        if ($category->division_id != $request->division_id) {
            return back()
                ->withInput()
                ->withErrors([
                    'category_id' => 'La categoría no pertenece al almacén seleccionado',
                ]);
        }

        ImaqProductInventory::create($request->all());

        return redirect()
            ->route('admin.warehouseimaqone.inventory.index')
            ->with('success', 'Producto creado correctamente');
    }

    /**
     * Formulario de edición
     */
    public function edit(ImaqProductInventory $imaqProductInventory)
    {
        return view('admin.warehouseimaqone.inventory.edit', [
            'product' => $imaqProductInventory,
            'divisions' => Division::all(),
            'categories' => ImaqCategory::where('status', 1)->get(),
            'units' => ImaqUnitOfMeasurement::all(),
            'materials' => ImaqTypeOfMaterial::all(),
            'sizes' => ImaqSize::all(),
        ]);
    }

    /**
     * Actualizar producto
     */
    public function update(Request $request, ImaqProductInventory $imaqProductInventory)
    {
        // Normalizar clave
        $request->merge([
            'clave' => strtoupper($request->clave),
        ]);

        $request->validate([
            'clave' => [
                'required',
                'string',
                'max:100',
                Rule::unique('imaq_products_inventory')
                    ->ignore($imaqProductInventory->id)
                    ->where(fn ($q) => $q->where('division_id', $request->division_id)),
            ],
            'name' => 'required|string|max:255',
            'division_id' => 'required|exists:imaq_division,id',
            'category_id' => 'required|exists:imaq_categories,id',
            'unit_of_measurement_id' => 'required|exists:imaq_unit_of_measurement,id',
            'type_of_material_id' => 'required|exists:imaq_type_of_material,id',
            'size_id' => 'required|exists:imaq_size,id',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        // Validación categoría vs división
        $category = ImaqCategory::find($request->category_id);

        if ($category->division_id != $request->division_id) {
            return back()
                ->withInput()
                ->withErrors([
                    'category_id' => 'La categoría no pertenece al almacén seleccionado',
                ]);
        }

        $imaqProductInventory->update($request->all());

        return redirect()
            ->route('admin.warehouseimaqone.inventory.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Desactivar producto (NO borrar)
     */
    public function destroy(ImaqProductInventory $imaqProductInventory)
    {
        $imaqProductInventory->update([
            'status' => 0,
        ]);

        return redirect()
            ->route('admin.warehouseimaqone.inventory.index')
            ->with('success', 'Producto desactivado correctamente');
    }

    // public function getProducts() {
    //     $request = request();
    //     $inventory   = Inventory::with(['category','division','provider','brand','umedida','typematerial','satkeyunidad', 'levelarea', 'size', 'clasesat']);
    //     return $inventory->where('status', 1)->where('division_id', 1)->get();
    // }



    // public function getAll(Request $request)
    // {
    //     // IDs de almacenes (puedes hacerlo dinámico luego)
    //     $imaq1 = 1;
    //     $imaq2 = 4;

    //     $products = ImaqProductInventory::with([
    //             // 'division:id,name',
    //             'category:id,name',
    //             'umedida:id,name'
    //         ])
    //         ->withSum([
    //             'movements as stock_in' => function ($q) {
    //                 $q->where('type', 'in');
    //             }
    //         ], 'quantity')
    //         ->withSum([
    //             'movements as stock_out' => function ($q) {
    //                 $q->where('type', 'out');
    //             }
    //         ], 'quantity')
    //         ->orderBy('id', 'desc')
    //         ->get()
    //         ->map(function ($item) {
    //             $item->stock = ($item->stock_in ?? 0) - ($item->stock_out ?? 0);
    //             return $item;
    //         });

    //     // return response()->json([
    //     //     'data' => $products
    //     // ]);

    //     return $products;
    // }

    public function getAll()
    {
        // IDs reales de almacenes IMAQ
        $imaq1 = 1; // Almacen IMAQ 1
        $imaq2 = 4; // Almacen IMAQ 2

        $products = ImaqProductInventory::with([
                'division:id,name',
                'category:id,name',
                'umedida:id,name'
            ])
            ->withSum([
                'movements as imaq1_in' => function ($q) use ($imaq1) {
                    $q->where('division_id', $imaq1)
                    ->where('type', 'in');
                }
            ], 'quantity')
            ->withSum([
                'movements as imaq1_out' => function ($q) use ($imaq1) {
                    $q->where('division_id', $imaq1)
                    ->where('type', 'out');
                }
            ], 'quantity')
            ->withSum([
                'movements as imaq2_in' => function ($q) use ($imaq2) {
                    $q->where('division_id', $imaq2)
                    ->where('type', 'in');
                }
            ], 'quantity')
            ->withSum([
                'movements as imaq2_out' => function ($q) use ($imaq2) {
                    $q->where('division_id', $imaq2)
                    ->where('type', 'out');
                }
            ], 'quantity')
            ->orderByDesc('id')
            ->get();

        // Cálculo final y alertas

        $products->map(function ($p) {
            $p->stock_imaq1 = ($p->imaq1_in ?? 0) - ($p->imaq1_out ?? 0);
            $p->stock_imaq2 = ($p->imaq2_in ?? 0) - ($p->imaq2_out ?? 0);
            $p->stock_total = $p->stock_imaq1 + $p->stock_imaq2;

            // 🚨 alerta
            $p->is_low_stock = $p->stock_total <= $p->stock_minimo;

            return $p;
        });


        // ⚠️ factoryNixDit espera array plano
        return $products;
    }


}

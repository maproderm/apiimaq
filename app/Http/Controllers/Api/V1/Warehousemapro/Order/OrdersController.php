<?php

namespace App\Http\Controllers\Api\V1\Warehousemapro\Order;

use App\Models\User;
use App\Models\Mpdorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\OrderResource;
use App\Http\Resources\V1\OrderCollection;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return new OrderCollection ( Mpdorder::with(['user']) );

        // $request = request();
        // $orders   = Mpdorder::with(['user']);
        // return $orders->get();

        try {

            $orders     = Mpdorder::with('user')->get();
            $data       = OrderResource::collection( $orders );
            return response()->json([
                'ok' => true,
                'orders' => $data
            ]);

        } catch (Throwable $th) {
            return response()->json([
                'ok'        => false,
                'orders' => [],
            ], 400);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new OrderResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

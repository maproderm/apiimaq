<?php

namespace App\Http\Controllers\Sales\Pedido;
use App\Models\Mpdorder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mpdorder $order)
    {
        //Se muestra la vista de pedidos (Mis pedidos en area de ventas)

        $orders = Mpdorder::with(['clientUser', 'clientInformation'])->get();
        //return datatables()->of($orders)->make(true);

        return view('admin.sales.pedidos.index');
    }

    public function data(Request $request)
    {
        $orders = Mpdorder::with(['clientUser', 'clientInformation'])->get();

        return datatables()->of($orders)->make(true);
    }

    public function quotation()
    {
        return view('admin.sales.pedidos.quotation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function getOrdersMapro() {
        // $request = request();
        // $inventory   = Mpdorder::with(['user']);
        // return $inventory
        //         ->wherein('status', [0, 1, 2, 3])
        //         ->get();

        $request = request();
        $orders   = Mpdorder::with(['user', 'clientInformation']);
        // $orders = Mpdorder::with(['clientUser', 'clientInformation'])->get();
        return $orders->get();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

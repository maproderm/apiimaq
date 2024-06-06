<?php

namespace App\Http\Controllers\Warehouseimaq\Form;

use App\Models\Imaqform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FormimaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.warehouseimaq.form.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $error   = false;
        $message = null;
        $render  = null;
        try {
            $imaqform = Imaqform::find($id);
            if($imaqform){
                $data               = (object)[];
                $data->imaqform     = $imaqform;
                $render = view('admin.warehouseimaq.form.modal.edit_status',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Producto no encontrado';
            }
        } catch (\Throwable $th) {
            $error   = false;
            $message = "Ocurrió un error durante el proceso: {$th->getMessage()}";
        }

        return response()->json([
            'error'   => $error,
            'message' => $message,
            'render'  => $render
        ]);
    }

    public function viewmessage($id)
    {
        $error   = false;
        $message = null;
        $render  = null;
        try {
            $imaqform = Imaqform::find($id);
            if($imaqform){
                $data               = (object)[];
                $data->imaqform     = $imaqform;
                $render = view('admin.warehouseimaq.form.modal.edit_message',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Producto no encontrado';
            }
        } catch (\Throwable $th) {
            $error   = false;
            $message = "Ocurrió un error durante el proceso: {$th->getMessage()}";
        }
 
        return response()->json([
            'error'   => $error,
            'message' => $message,
            'render'  => $render
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $type_message = false;
        $message      = null;
        try {
            $imaqform = Imaqform::find($request->id);
            if($imaqform){
                $updated = $imaqform->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Estatus Actualizado';
                } else {
                    $type_message = 'warning';
                    $message      = 'El producto no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Producto no encontrado';
            }
        } catch (\Throwable $th) {
            $type_message = 'error';
            $message      = "Ocurrio un error durante el proceso: {$th->getMessage()}";
        }

        Session::flash('alert',[ // Message alert
            'type'    => $type_message,
            'message' => $message
        ]);

        return back();
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

    public function get() {
        // return Imaqform::get();

        $request = request();
        $inventory   = Imaqform::with(['serviceformimaq','lineformimaq']);
        return $inventory->get();
    }
}

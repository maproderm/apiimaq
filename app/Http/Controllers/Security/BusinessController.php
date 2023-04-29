<?php

namespace App\Http\Controllers\Security;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.security.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function get() {
        return Business::get();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $error   = false;
        $message = null;
        $render  = null;
        try {
            $business = Business::find($id);
            if($business){
                $data             = (object)[];
                $data->business   = $business;
                $render = view('admin.security.modal.edit_business',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Empresa no encontrado';
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
     */
    public function update(Request $request, string $id)
    // public function update(Request $request, $id)
    {
        $type_message = false;
        $message      = null;
        try {
            $business = Business::find($request->id);
            if($business){
                $updated = $business->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Empresa editado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'La empresa no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Empresa no encontrado';
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
     */
    public function destroy(string $id)
    {
        //
    }
}

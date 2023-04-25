<?php

namespace App\Http\Controllers\Warehouseimaq\Catalog;

use App\Models\Rol;
use App\Models\User;
use App\Models\Imaqbrand;
use App\Models\Imaqumedida;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use App\Models\Imaqprovider;
use Illuminate\Http\Request;
use App\Models\Imaqtypematerial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('admin.warehouseimaq.catalog.division.index');
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
        $event = Imaqdivision::create([
            'name' =>$request->name_division_imaq,
            'abrv' =>$request->abrv_division_imaq,
        ]);
        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nueva division registrada'
        ]);
        return back();
    }


    public function get() {
        return Imaqdivision::get();
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
            $division = Imaqdivision::find($id);
            if($division){
                $data               = (object)[];
                $data->division     = $division;
                $render = view('admin.warehouseimaq.catalog.division.modal.update_division',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Division no encontrado';
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
    public function update(Request $request, $id)
    {
        $type_message = false;
        $message      = null;
        try {
            $division = Imaqdivision::find($request->id);
            if($division){
                $updated = $division->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Division editado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'La division no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Division no encontrado';
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
    public function delete($id)
    {
        $error   = false;
        $message = null;
        try {
            $division = Imaqdivision::find($id);
            if($division){
                $deleted = $division->delete();
                if($deleted){
                    $message = 'División eliminado correctamente';
                    $type   = 'success';
                } else {
                    $error   = true;
                    $message = 'Error no pudo ser eliminado, intente nuevamente';
                }
            } else {
                $error   = true;
                $message = 'Division no encontrado';
            }
        } catch (\Throwable $th) {
            $error   = true;
            $message = "Ocurrió un error durante el proceso: {$th->getMessage()}";
        }

        return response()->json([
            'error'   => $error,
            'message' => $message
        ]);
    }
}

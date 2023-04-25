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

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.warehouseimaq.catalog.typematerial.index');
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
        $event = Imaqtypematerial::create([
            'name' =>$request->name_material_imaq,
        ]);
        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Registro exitoso'
        ]);
        return back();
    }




    public function get() {
        return Imaqtypematerial::get();
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
            $material = Imaqtypematerial::find($id);
            if($material){
                $data               = (object)[];
                $data->material     = $material;
                $render = view('admin.warehouseimaq.catalog.typematerial.modal.update_material',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Tipo de material no encontrado';
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
            $material = Imaqtypematerial::find($request->id);
            if($material){
                $updated = $material->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Tipo de material editado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'Tipo de material no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Tipo de material no encontrado';
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
            $material = Imaqtypematerial::find($id);
            if($material){
                $deleted = $material->delete();
                if($deleted){
                    $message = 'Tipo de material eliminado correctamente';
                    $type   = 'success';
                } else {
                    $error   = true;
                    $message = 'Error no pudo ser eliminado, intente nuevamente';
                }
            } else {
                $error   = true;
                $message = 'Tipo de material no encontrado';
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

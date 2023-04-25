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

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.warehouseimaq.catalog.brand.index');
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


    public function getBrandsImaq() {
        return Imaqbrand::where('type', 3)->get();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function store(Request $request)
     {
         $event = Imaqbrand::create([
             'name' =>$request->name_brand_imaq,
             'type' =>3,
             'description' =>$request->description_brand_imaq,
         ]);
         event(new Registered($event));
         Session::flash('alert',[ // Message for Swal general alert
             'type'    => 'success',
             'message' => 'Nueva marca de proveedor registrada'
         ]);
         return back();
     }






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
            $brand = Imaqbrand::find($id);
            if($brand){
                $data             = (object)[];
                $data->brand    = $brand;
                $render = view('admin.warehouseimaq.catalog.brand.modal.update_brand',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Marca no encontrado';
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
        // return view( 'serintel.product.modals.update_product' )->with('division', Division::find($id));
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
            $brand = Imaqbrand::find($request->id);
            if($brand){
                $updated = $brand->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Marca editado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'La marca no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Marca no encontrado';
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
            $brand = Imaqbrand::find($id);
            if($brand){
                $deleted = $brand->delete();
                if($deleted){
                    $message = 'Marca eliminado correctamente';
                    $type   = 'success';
                } else {
                    $error   = true;
                    $message = 'Error no pudo ser eliminado, intente nuevamente';
                }
            } else {
                $error   = true;
                $message = 'Marca no encontrado';
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

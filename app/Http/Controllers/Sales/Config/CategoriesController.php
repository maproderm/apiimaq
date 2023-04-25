<?php

namespace App\Http\Controllers\Sales\Config;
use App\Models\Imaqbrand;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data               = (object)[];
        $data->division     = Imaqdivision::all();
        return view('admin.sales.config.categories', compact('data'));
    }


    public function get() {

        // return Imaqcategory::get();
        $request = request();
        $inventory   = Imaqcategory::with(['division']);
        return $inventory->where('division_id', 3)->get();
        // return $inventory->get();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.sales.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $event = Imaqcategory::create([
            'name' =>$request->name_category,
            'division_id' =>$request->id_division,
        ]);
        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nueva categoría registrada'
        ]);
        // return redirect()->route('view-products');
        return back();
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
            $category = Imaqcategory::find($id);
            if($category){
                $data               = (object)[];
                $data->category     = $category;
                $data->divisions    = Imaqdivision::select('id','name')->get();
                $render = view('admin.sales.config.modal.update_category',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Categoría no encontrado';
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
            $category = Imaqcategory::find($request->id);
            if($category){
                $updated = $category->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Categoría editado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'La categoría no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Categoría no encontrado';
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
            $category = Imaqcategory::find($id);
            if($category){
                $deleted = $category->delete();
                if($deleted){
                    $message = 'Categoría eliminado correctamente';
                    $type   = 'success';
                } else {
                    $error   = true;
                    $message = 'Error no pudo ser eliminado, intente nuevamente';
                }
            } else {
                $error   = true;
                $message = 'Categoría no encontrado';
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

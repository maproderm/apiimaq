<?php

namespace App\Http\Controllers\Sales\Config;
use App\Models\Mpdevent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.sales.config.events');
    }



    public function get() {

        // return Imaqbrand::get();
        return Mpdevent::where('status', 1)->get();

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
        $event = Mpdevent::create([
            'name'          =>$request->name,
            'productor'     =>$request->productor,
            'artista'       =>$request->artista,
            'ciudad'        =>$request->ciudad,
            'hotel'         =>$request->hotel,
            'registro'      =>$request->registro,
            'fecha_inicio'  =>$request->fecha_inicio,
            'fecha_fin'     =>$request->fecha_fin,
        ]);
        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nuevo evento registrado'
        ]);
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
            $event = Mpdevent::find($id);
            if($event){
                $data             = (object)[];
                $data->event    = $event;
                $render = view('admin.sales.config.modal.update_event',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Evento no encontrado';
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
            $event = Mpdevent::find($request->id);
            if($event){
                $updated = $event->update($request->all());
                if($updated) {
                    $type_message = 'success';
                    $message      = 'Evento editado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'El Evento no fue editado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Evento no encontrado';
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
            $brand = Mpdevent::find($id);
            if($brand){
                $deleted = $brand->delete();
                if($deleted){
                    $message = 'Evento eliminado correctamente';
                    $type   = 'success';
                } else {
                    $error   = true;
                    $message = 'Error no pudo ser eliminado, intente nuevamente';
                }
            } else {
                $error   = true;
                $message = 'Evento no encontrado';
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

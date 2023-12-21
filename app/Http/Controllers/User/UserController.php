<?php

namespace App\Http\Controllers\User;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.users.view-user');
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


    public function get() {

        // $users = new UserCollection( User::all() );

        // return response()->json([
        //     'data' => $users
        // ]);

        return User::get();

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
            $user = User::find($id);
            if($user){
                $data               = (object)[];
                $data->user         = $user;
                $render = view('admin.users.update-user',compact('data'))->render();
            } else {
                $error   = false;
                $message = 'Usuario no encontrado';
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
            if((int)$id > 0){

                $password = request('password');
                $user = User::find($request->id);

                (is_null($password) || $password == '') ? $password = $user->password : $password = Hash::make(request('password')); //if() ternario
                $updated = $user->update([
                    'name'          => request('name'),
                    'email'         => request('email'),
                    'last_name'     => request('last_name'),
                    'status'        => request('status'),
                    'password' => $password

                ]);

                dd($user);
                // $updated = $user->update($request->all());


                if($updated) {
                    $type_message = 'success';
                    $message      = 'Usuario actualizado correctamente';
                } else {
                    $type_message = 'warning';
                    $message      = 'El usuario no fue actualizado, intente nuevamente';
                }
            } else {
                $type_message = 'error';
                $message      = 'Usuario no encontrado';
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
}

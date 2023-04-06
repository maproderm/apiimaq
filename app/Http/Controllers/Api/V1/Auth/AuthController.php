<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // BEGIN:: Signin function
    public function login( Request $request ) {

        $fields = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string',
        ]);

        //CHECK IF EMAIL IS REGISTERED IN DB
        $user = User::where('email', $fields['email'])->with('roles')->first();

        if( !$user || !Hash::check( $fields['password'], $user->password ) ) {

            return response()->json([
                'ok'        => false,
                'message'   => 'Las credenciales que proporciono no coinciden, revise e intentelo nuevamente',
            ], 401);

        }

        $tokenAlreadyRegistered = $user->devices()->onlyTrashed()->where('token', $request->token)->first();

        if( $tokenAlreadyRegistered ) {
            $tokenAlreadyRegistered->restore();
        } else {
            $user->devices()->firstOrCreate(['token' => $request->token]);
        }


        $token = $user->createToken('authtoken')->plainTextToken;

        //Hide Unnecesary Fields in Role
        $user->roles->makeHidden(['guard_name', 'created_at', 'updated_at', 'pivot']);
        //Hide unnecesary user fields
        $user->makeHidden(['deleted_at', 'created_at', 'updated_at', 'email_verified_at']);

        return response()->json([
            'ok'        => true,
            'message'   => 'Bienvenido',
            'user'      => $user,
            'token'     => $token,
        ], 200);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

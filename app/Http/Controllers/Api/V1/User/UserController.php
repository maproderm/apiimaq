<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\CustomerResource;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserCollection ( User::all() );
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
    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function getClients(): JsonResponse {
        try {

            $customers  = User::role('customer')->get();
            $data       = CustomerResource::collection( $customers );
            return response()->json([
                'ok' => true,
                'clients' => $data
            ]);

        } catch (Throwable $th) {
            return response()->json([
                'ok'        => false,
                'clients' => [],
            ], 400);
        }

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

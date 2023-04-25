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

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.warehouseimaq.catalog.provider.index');
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
        $event = User::create([
            'name'          =>$request->name_provider_imaq,
            'last_name'     =>$request->last_name_provider_imaq,
            'email'         =>$request->email_provider_imaq,
            // 'membership'    =>$request->membership_client,
            'password'      => Hash::make('Imaq.2024'),
        ]);
        $event->assignRole('provider');

        $event->providerInformation()->create([
            'phone'      => $request->phone_provider_imaq,
            'rfc'        => $request->rfc_provider_imaq,
            'address'    => $request->address_provider_imaq,
            'status'     => 1,
        ]);

        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nuevo proveedor registrado'
        ]);
        return back();
    }


    public function get() {
        $request = request();
        $providers   = Imaqprovider::with(['provider']);
        // dd($providers);
        return $providers->get();

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
        //
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
        //
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

<?php

namespace App\Models;

use App\Models\User;
use App\Models\Mpdorderdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mpdorder extends Model
{
    use HasFactory;

    protected $table = 'mpd_sales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'employee_id',
        'num_order',
        'phone',
        'items',
        'subtotal',
        'discount',
        'shipping',
        'total',
        'delivery_date',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function details()
    {
        return $this->hasMany(Mpdorderdetail::class);
    }

    //Ajuste al Modelo Mpdorder para que tenga la relación con el usuario a través de id_cliente, esto para tomar datos del cliente en las ventas
    public function clientUser()
    {
        return $this->belongsTo(User::class, 'id_client', 'id');
        //return $this->belongsTo(User::class, 'id_client', 'id');
    }

    //Relación hacia client_informations a través del usuario, esto para tomar datos del cliente en las ventas
    public function clientInformation()
    {
        return $this->hasOneThrough(
            \App\Models\Mpdclient::class,
            \App\Models\User::class,
            'id', // Foreign key on User table
            'user_id', // Foreign key on ClientInformation table
            'id_client', // Local key on Order table
            'id' // Local key on User table
        );
    }
}

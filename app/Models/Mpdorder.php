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

    public function details()
    {
        return $this->hasMany(Mpdorderdetail::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpdevent extends Model
{
    use HasFactory;

    protected $table = 'mpd_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'productor',
        'artista',
        'ciudad',
        'hotel',
        'registro',
        'fecha_inicio',
        'fecha_fin',
        'status'
    ];

    // public function client() {
    //     return $this->belongsTo('App\Models\User', 'user_id', 'id');
    // }


}

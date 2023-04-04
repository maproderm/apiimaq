<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqformservices extends Model
{
    use HasFactory;

    protected $table = 'imaq_form_services';

    protected $fillable = [
        'id',
        'name',
        'status'
    ];



}

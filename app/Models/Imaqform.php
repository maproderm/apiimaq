<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqform extends Model
{
    use HasFactory;

    protected $table = 'imaq_form_quotation';

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'email',
        'phone',
        'service',
        'line',
        'message',
        'quantity',
        'hour',
        'state_id',
        'form_city',
        'status'
    ];

    public function serviceformimaq() {
        return $this->belongsTo('App\Models\Imaqformservices', 'service_id', 'id');
    }

    public function lineformimaq() {
        return $this->belongsTo('App\Models\Imaqformlines', 'line_id', 'id');
    }

    public function stateformimaq() {
        return $this->belongsTo('App\Models\State', 'state_id', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\ImaqProductInventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imaqdivision extends Model
{
    use HasFactory;

    protected $table = 'imaq_division';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'abrv',
    ];

    public function products()
    {
        return $this->hasMany(
            ImaqProductInventory::class,
            'division_id'
        );
    }
}

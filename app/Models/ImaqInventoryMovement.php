<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImaqInventoryMovement extends Model
{
    use HasFactory, SoftDeletes;

   protected $table = 'imaq_inventory_movements';

    protected $fillable = [
        'product_inventory_id',
        'type',        // IN | OUT
        'quantity',
        'reference',
    ];

    public function product()
    {
        return $this->belongsTo(
            ImaqProductInventory::class,
            'product_inventory_id'
        );
    }

    public function movements()
    {
        return $this->belongsTo(
            ImaqProductInventory::class,
            'product_inventory_id'
        );
    }

    public function division()
    {
        return $this->belongsTo(
            Imaqdivision::class,
            'division_id'
        );
    }
}

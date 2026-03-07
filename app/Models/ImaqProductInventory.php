<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImaqProductInventory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'imaq_products_inventory';

    protected $fillable = [
        'clave',
        'name',
        'division_id',
        'category_id',
        'unit_of_measurement_id',
        'type_of_material_id',
        'size_id',
        'description',
        'status'
    ];

    /* ================= RELACIONES ================= */

    public function division()
    {
        return $this->belongsTo(Imaqdivision::class, 'division_id');
    }

    public function category()
    {
        return $this->belongsTo(Imaqcategory::class, 'category_id');
    }

    // public function unit()
    // {
    //     return $this->belongsTo(Imaqumedida::class, 'unit_of_measurement_id');
    // }

    public function materialType()
    {
        return $this->belongsTo(Imaqtypematerial::class, 'type_of_material_id');
    }

    public function size()
    {
        return $this->belongsTo(Imaqsize::class, 'size_id');
    }

    // ⏭️ Aquí luego conectamos inventario
    public function movements()
    {
        return $this->hasMany(ImaqInventoryMovement::class, 'product_inventory_id');
    }

    public function umedida()
    {
        return $this->belongsTo(Imaqumedida::class, 'unit_of_measurement_id');
    }
}

<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InventoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        //Para crear un matriz de llamado, así no llamar toda la información
        return[
            'id'                => $this->id,
            'name_product_inventory'              => $this->name_product_inventory,
            'image'              => $this->image,
            'stock_inventory'   => $this->stock_inventory,
            'division_id'   => $this->division_id,
            'category_id'   => $this->category_id,
            'sku_product_inventory'   => $this->sku_product_inventory,
        ];

    }
}

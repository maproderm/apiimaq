<?php

namespace App\Http\Resources\V1;


use Illuminate\Http\Request;
use App\Http\Resources\V1\InventoryResource;
use Illuminate\Http\Resources\Json\ResourceCollection;


class InventoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        // return EjemploResource::collection( $this->collection );
        // return User::collection($this->collection);

        return [
            'data' => $this->collection,
        ];

        // return [
        //     'data' => $this->collection,
        //     'links' => [
        //         'self' => 'link-value',
        //     ],
        // ];


    }
}

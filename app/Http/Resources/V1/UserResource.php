<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'last_name'     => $this->last_name,
            'email'         => $this->email,
            'last_login'    => $this->last_login,
            'status'        => $this->status,
            'created_at'    => $this->created_at,
        ];

    }
}

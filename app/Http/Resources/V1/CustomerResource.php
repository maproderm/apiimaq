<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * @var mixed
     */
    /**
     * @var mixed
     */

    /**
     * Transform the resource into an array.
     *
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                    => $this->id,
            'name'                  => ucfirst($this->name),
            // 'last_name'             => ucfirst($this->last_name),
            // 'email'                 => $this->email,
            // 'client_information'    => $this->clientInformation,
            // 'routes'                => $this->routes,
            // 'created_at'            => $this->created_at
        ];
    }
}

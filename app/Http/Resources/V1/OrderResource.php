<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{

    // public static $wrap = 'mpdorder';
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
            // 'employee_id'       => $this->employee_id,
            // 'fullname'          => $this->user->name,
            'fullname'          => ucfirst($this->user->name) . ' ' . ucfirst($this->user->last_name),
            // 'user_id'           => $this->user_id,
            'num_order'         => $this->num_order,
            'items'             => $this->items,
            'status'            => $this->status,
            // 'created_at'        => $this->created_at,
            'created_at'        => $this->created_at->format('d/m/Y h:i A'),
            'delivery_date'     => $this->delivery_date,
            // 'hola'              => ($this->created_at) / ($this->created_at),

        ];

    }
}

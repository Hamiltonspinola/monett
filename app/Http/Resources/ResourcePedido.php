<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourcePedido extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'status' => $this->id,
            'cliente_id'   =>$this->cliente_id,
            'items' => $this -> pedidoItem,
            'created_at'    => $this->created_at, 
            'updated_at'    => $this->updated_at, 
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceCliente extends JsonResource
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
            'nome'  => $this->nome,
            'email'  => $this->email,
            'telefone'  => $this->telefone,
            'endereco'  =>$this->endereco,
            'created_at'    => $this->created_at, 
            'updated_at'    => $this->updated_at, 
        ];
    }
}

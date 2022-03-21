<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable = ['cliente_id', 'status'];

    public function cliente()
    {
        /**
         * Get the user that owns the Pedido
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        return $this->belongsTo(Cliente::class);
    }

    public function pedidoItem(){
        return $this->hasMany(PedidoProduto::class, 'pedido_id', 'id');
    }
}

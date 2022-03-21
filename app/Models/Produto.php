<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['nome', 'preco'];

    public function pedidoItem(){
        /**
         * The roles that belong to the Produto
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        return $this->belongsToMany(PedidoProduto::class, 'pedido_item', 'produto_id', 'id');
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pedidos = Pedido::with('cliente', 'pedidoItem', 'pedidoItem.produto')->get();
        return view('monett.pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::get();
        $clientes = Cliente::get();
        return view('monett.pedidos.create', compact('produtos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = Pedido::with('cliente');
        $pedidoItem = new PedidoProduto;
        $valorTotal = ($request->quantidade * $request->preco);
        $pedido->create([
            'cliente_id' => $request->clientes,
            'status'  => 'Pendente',
        ]);
        $idPedido = Pedido::orderBy('id', 'desc')->first();

        $pedidoItem->create([
            'pedido_id'   => $idPedido->id,
            'produto_id'  => $request->id,
            'valor'         => $valorTotal,
            'quantidade'   => $request->quantidade
        ]);
        return redirect()->route('monett.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($pedido)
    {   
        $result = Pedido::with('pedidoItem', 'pedidoItem.produto')->find($pedido);
        return view('monett.pedidos.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        if($pedido->status == "pendente"){
            $pedido->update([
                'status' => "Preparando",
            ]);
        }elseif($pedido->status == "Preparando"){
            $pedido->update([
                'status' => "emEntrega",
            ]);
        }elseif($pedido->status == "emEntrega"){
            $pedido->update([
                'status' => "Entregue",
            ]);
        }
        return redirect()->route('pedidos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}

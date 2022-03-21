<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourcePedido;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoApiController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $clienteId)
    {
        DB::beginTransaction();

        try {
 

            $pedido = Pedido::create([
                'status' => $request->status,
                'cliente_id' => $clienteId,
            ]);

  
            

            foreach($request -> pedidoItems as $item){

                var_dump($item);

                $item = PedidoProduto::create(
                    [
                        'pedido_id' => $pedido -> id,
                        'produto_id' => $item["produto_id"],
                        'quantidade' => $item["quantidade"],
                        'valor' => $item["valor"]
                    ]
                );   
            }




            DB::commit();
            return response()->json(['Pedido criado.', new ResourcePedido($pedido)]);

        } catch (Exception $ex) {

            return response()->json(['Erro.', $ex -> getMessage()]);

            DB::rollBack();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($clienteId, $id)
    {
        $pedido = Pedido::where('id', $id)->where('cliente_id', $clienteId) -> with('pedidoItem')->first();

        if (is_null($pedido)) {
            return response()->json('Pedido não encontrado', 404);
        }
        return response()->json([new ResourcePedido($pedido)]);
    }


    public function list($clienteId)
    {
        $pedidos = Pedido::where('cliente_id', $clienteId)->get();

       
        return response()->json([ResourcePedido::collection($pedidos)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($clienteId, $id, Pedido $pedido)
    {

        $delPedido = $pedido->where('id', $id)->where('cliente_id', $clienteId)->first();

        if(is_null($delPedido)){
            return response()->json(['Pedido não encontrado.']);
        }
        
        $delPedido -> delete();

        return response()->json(['Pedido excluído com sucesso.']);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceCliente;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ClienteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        return response()->json([ResourceCliente::collection($clientes), 'Clientes']);
    }

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
    public function store(Request $request)
    {
        $cli = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
         ];
        FacadesValidator::make($cli, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:cliente'],
            'telefone'  => ['required', 'string', 'unique:cliente'],
        ])->validate();

        $cliente = Cliente::create($cli);
        
        return response()->json(['Cliente Criado.', new ResourceCliente($cliente)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if (is_null($cliente)) {
            return response()->json('Cliente não encontrado', 404); 
        }
        return response()->json([new ResourceCliente($cliente)]);
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
    public function update(Request $request, $id,Cliente $cliente)
    {
    
        $updateCliente = $cliente->where('id', $id)->first();

        $updateCliente->update([
            'nome'  => $request->nome,
            'telefone'  => $request->telefone,
            'email'  => $request->email,
            'endereco'  => $request->endereco,
        ]);
        
        return response()->json(['Cliente atualizado com sucesso.', new ResourceCliente($updateCliente)]);
    }
}

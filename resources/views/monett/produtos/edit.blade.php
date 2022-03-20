@extends('adminlte::page')

@section('title', 'Cadastro de Produtos')

@section('content_header')
    <h1>Cadastrar</h1>
@stop

@section('content')
    <div class="card card-info">
        <div class="card-header">
        </div>


        <form class="form-horizontal" action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Nome do produto" name="nome" value="{{ $produto->nome }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="preco" class="col-sm-2 col-form-label">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="preco" placeholder="Preço" name="preco" value="{{ $produto->preco }}">
                    </div>
                </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Atualizar</button>
            </div>

        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

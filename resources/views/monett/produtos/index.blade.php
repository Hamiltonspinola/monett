@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Listagem de produtos</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>R$ {{ $produto->preco }}</td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-success">Editar</a>
                                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="post" class="col-md-6">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

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

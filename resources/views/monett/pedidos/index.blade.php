<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monett') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Pedido: #
                            </th>
                            <th>
                                Valor do pedido:
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>
                                    {{ $pedido->id }}
                                </td>
                                <td>
                                    {{ $pedido->pedidoItem[0]->valor }}
                                </td>
                                <td>
                                    {{ $pedido->status }}
                                </td>
                                <td>
                                        <form action="{{ route('pedidos.update', $pedido->id) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success col-md-3">Atualizar Pedido</button>
                                        </form>

                                        <a href="{{ route('pedidos.show', $pedido->id) }}">
                                            <button class="btn btn-info col-md-3">Detalhes do Pedido</button>
                                        </a>

                                        <form action="{{ route('pedidos.destroy', $pedido->id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger col-md-3">Excluir Pedido</button>

                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

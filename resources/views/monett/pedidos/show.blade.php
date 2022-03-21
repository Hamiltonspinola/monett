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
                                Produtos
                            </th>
                            <th>
                                Valor Unitário
                            </th>
                            <th>
                                Quantidade
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                            <tr>
                                <td>
                                    {{ $result->id }}
                                </td>
                                <td>
                                    @for ($i=0; $i<count($result->pedidoItem); $i++)
                                        {{ $result->pedidoItem[$i]->valor }}
                                    @endfor
                                </td>
                                <td>
                                    {{ $result->status }}
                                </td>
                                <td>
                                    @for ($i=0; $i<count($result->pedidoItem); $i++)
                                        {{ $result->pedidoItem[$i]->produto->nome }}
                                    @endfor
                                    
                                </td>
                                <td>
                                    @for ($i=0; $i<count($result->pedidoItem); $i++)
                                        {{ $result->pedidoItem[$i]->produto->preco }}
                                    @endfor
                                </td>
                                <td>
                                    @for ($i=0; $i<count($result->pedidoItem); $i++)
                                        {{ $result->pedidoItem[$i]->quantidade }}
                                        
                                    @endfor
                                </td>
                                <td>
                                    <form action="{{ route('pedidos.destroy', $result->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excuir Pedido</button>

                                    </form>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

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
                                ID: #
                            </th>
                            <th>
                                Nome
                            </th>
                            <th>
                                Preço
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>
                                    {{ $produto->id }}
                                </td>
                                <td>
                                    {{ $produto->nome }}
                                </td>
                                <td>
                                    {{ $produto->preco }}
                                </td>
                                <td>
                                    <a href="{{ route('produtos.edit', $produto->id) }}">
                                        <button type="submit" class="btn btn-success col-md-3">Editar Produto</button>
                                    </a>
                                    
                                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger col-md-3">Excuir Pedido</button>
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

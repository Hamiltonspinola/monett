<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monett') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="form-horizontal" action="{{ route('pedidos.store') }}" method="POST">
                    @csrf

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>
                                        <x-jet-input type="text" value="{{ $produto->nome }}" class="block mt-1 w-full"/>
                                    </td>
                                    <td>
                                        <x-jet-input type="text"  value="{{ $produto->preco }}" class="block mt-1 w-full"/>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Finalizar Pedido</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>

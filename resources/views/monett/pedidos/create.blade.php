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
                                <th>
                                    Valor do Pedido: 
                                </th>
                            </tr>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <select name="clientes" id="">
                                    <option value=""></option>
                                    @foreach ($clientes as $c)
                                    <option value="{{ $c->id }}">{{ $c->nome }}</option>    
                                    @endforeach
                                </select>
                            </tr>
                            @foreach ($produtos as $produto)
                                <tr id="tr">
                                    <td>
                                        <x-jet-input type="hidden" value="{{ $produto->id }}" class="block mt-1 w-full" name="id" />
                                        <x-jet-input type="text" value="{{ $produto->nome }}" class="block mt-1 w-full"/>
                                    </td>
                                    <td>
                                        <x-jet-input type="text"  value="{{ $produto->preco }}" class="block mt-1 w-full" name="preco"/>
                                    </td>
                                    <td>
                                        <x-jet-input type="number" class="block mt-1 w-full" id="quantidade" name="quantidade" onblur="sum()"/>
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

<script>
    // function sum(){
    //     var el = document.getElementById('tr');
    //     var qtd = el.closest('#quantidade');
    //     alert(qtd);
    // }
</script>

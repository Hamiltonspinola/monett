<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monett') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('produtos.store') }}">
        @csrf

        <div>
            <x-jet-label for="nome" value="{{ __('Nome') }}" />
            <x-jet-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required
                autofocus autocomplete="nome" />
        </div>

        <div class="mt-4">
            <x-jet-label for="preco" value="{{ __('Preço') }}" />
            <x-jet-input id="preco" class="block mt-1 w-full" type="text" name="preco" :value="old('preco')"
                required />
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info">Cadastrar</button>
        </div>
    </form>
</x-app-layout>

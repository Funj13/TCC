<x-app-layout>
    <x-slot name="header">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
    <a class="btn btn-dark" href='/cadastroQuarto'>Cadastrar Quarto</a>
        <h2>Logado Com Sucesso</h2>
        <a href="/">Clique aqui para Continuar.</a>
    </div>
</x-app-layout>
@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<div>
    <br>
    <a class="btn btn-dark" href='/cadastroQuarto'>Cadastrar Quarto</a>
</div>

<div class="Tabela_Quartos">
    <h2>Quartos Registrados</h2>

    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Tipagem</th>
            <th>Preço</th>
            <th>Disponibilidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        @foreach($rooms as $room)
            <tr>
                <th> {{ $room->id }} </th>
                <th> {{ $room->nome }} </th>
                <th> {{ $room->tipagem }} </th>
                <th> {{ $room->preco_por_noite }} </th>
                <th> {{ $room->disponibilidade }} </th>

                <th> <a href="{{ url('/editar') }}" class="btn btn-primary">Editar</a> </th>
                <th>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</>
                    </form>
                </th>

            </tr>
        @endforeach



    </table>
</div>
@endsection
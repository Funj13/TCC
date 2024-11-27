@extends('layouts.admin')
<head>

    <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
    </style>
  </head>
@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection



    <br>
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

                <th>
                @csrf
                <a href="{{ url('/editarRoom/'.$room->id)}}" x class="btn btn-primary">Editar</a>
                    
                </th>
                <th>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</>
                    </form>
                </th>

            </tr>
        @endforeach



    </table>
</div>


@endsection
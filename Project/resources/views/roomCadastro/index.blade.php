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



<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Quartos Registrados</h5>
        <div id="callsByCountry" class="auto-align-graph">
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Tipagem</th>
                        <th>Preço</th>
                        <th>Disponibilidade</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <br>
                <tbody>
                    <tr>
                        @foreach($rooms as $room)
                            <tr>
                                <td> {{ $room->id }} </td>
                                <td> {{ $room->nome }} </td>
                                <td> {{ $room->tipagem }} </td>
                                <td> {{ $room->preco_por_noite }} </td>
                                <td> {{ $room->disponibilidade }} </td>
                                
                                <th no-theme-change>
                                    @csrf
                                    <a href="{{ url('/editarRoom/' . $room->id)}}" x class="btn btn-primary">Editar</a>
                                </th>
                                <th>
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
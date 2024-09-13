@extends('layouts.admin')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection


    <div class="cadastroQuarto border">

        <form action="{{ route('rooms.store') }}" method="POST">
            @csrf
            <label for="" class="">Tipagem:</label>
            <input type="text" class="form-control border" name="tipo" />

            <label for="" class="">Preço:</label>
            <input type="number" class="form-control border" name="preco" />

            <label for="">Disponibilidade:</label>
            <br>
            <INPUT TYPE="RADIO" class="form-check-input border" NAME="dispo" VALUE="1"> sim
            <br>
            <INPUT TYPE="RADIO" class="form-check-input border" NAME="dispo" VALUE="0"> não
            <br>
            <label for="">Nome:</label>
            <input type="name" class="form-control border" id="nome" name="nome">
            <br>
            <button type="submit" class="btn btn-outline-success btn-position" data-bs-dismiss="enviar" name="enviar">
                Enviar</button>
    </div>

@endsection
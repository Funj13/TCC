@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<div class="cadastroQuarto">

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <label for="">Tipagem:</label>
        <input type="text" class="form-control" name="tipo" />

        <label for="">Preço:</label>
        <input type="number" class="form-control" name="preco" />
        <label for="">Disponibilidade:</label>
        <br>
        <INPUT TYPE="RADIO" class="form-check-input" NAME="dispo" VALUE="1"> sim
        <br>
        <INPUT TYPE="RADIO" class="form-check-input" NAME="dispo" VALUE="0"> não
        <br>
        <label for="">Nome:</label>
        <input type="name" class="form-control " id="nome" name="nome">
<br>
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="enviar" name="enviar">
            Enviar</button>
</div>


@endsection
@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<div class="editQuarto">

    <form method="POST" action="{{ route('rooms.update') }}">
        @csrf
       
        <div>
            <label for="">ID:</label>
            <input type="number" class="form-control" name="quartos_id" value="" />
            <label for="">Tipagem:</label>
            <input type="text" class="form-control" name="tipo" value="" />
            <label for="">Preço:</label>
            <input type="number" class="form-control" name="preco" value="" />
            <label for="">Disponibilidade:</label>
            <input type="number" min="0" max="1" class="form-control " name="dispo" value="" />
            <label for="">Nome:</label>
            <input type="name" class="form-control " id="nome" name="nome" value="">
<br>
            <button type="submit" class="btn btn-secondary">Salvar alterações</button>
        </div>
    </form>
</div>

<div>
    <br>
    <a href="/cadastroIndex" class=" btn btn-dark">Lista Quartos</a>
</div>


@endsection
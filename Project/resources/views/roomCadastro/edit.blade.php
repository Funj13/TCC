@extends('layouts.admin')
@extends('layouts.admin')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection


<

<div class="editQuarto">

    <form method="POST" action="{{ route('rooms.update') }}">
        @csrf
       
        <div>
            <label for="" class="form-label">ID:</label>
            <input type="number" class="form-control" name="quartos_id" value="" />
            <label for="" class="form-label">Tipagem:</label>
            <input type="text" class="form-control" name="tipo" value="" />
            <label for="">Preço:</label>
            <input type="number" class="form-control" name="preco" value="" />
            <label for="">Disponibilidade:</label>
            <br>
            <INPUT TYPE="RADIO" class="form-check-input border" NAME="dispo" VALUE="1"> sim
            <br>
            <INPUT TYPE="RADIO" class="form-check-input border" NAME="dispo" VALUE="0"> não
            <br>
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
@extends('layouts.admin')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Pinguem Hotel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p><a class="brutalist-card__button brutalist-card__button--mark" href='/cadastroQuarto'>Cadastrar Quarto</a></p>
        <p><a class="brutalist-card__button brutalist-card__button--mark" href='/cadastroIndex'>gerenciar</a></p>
    </div>
</div>

    <div class="cadastroQuarto border" class="theme">

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
            <label for="">Imagem:</label>
            <input type="image">
            <br>
            <button type="submit" class="btn btn-outline-success btn-position" data-bs-dismiss="enviar" name="enviar">
                Enviar</button>
                

    </div>

@endsection
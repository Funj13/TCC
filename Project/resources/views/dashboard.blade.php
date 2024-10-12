
@extends('layouts.main')

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
        <p><a class="brutalist-card__button brutalist-card__button--mark" href='/cadastroQuarto'>Cadastrar Quarto</a></p>
        <p><a class="brutalist-card__button brutalist-card__button--mark" href='/cadastroIndex'>gerenciar</a></p>
    </div>
</div>


<br>
<div class="container_dashboard " >
<div class="brutalist-card ">
  <div class="brutalist-card__header">
    <div class="brutalist-card__icon">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"
        ></path>
      </svg>
    </div>
    <div class="brutalist-card__alert color">Administração</div>
  </div>
  <div class="brutalist-card__actions">
  <button class="brutalist-card__button brutalist-card__button--mark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
  aria-controls="offcanvasWithBothOptions" >Gerenciar</button>
    <a class="brutalist-card__button brutalist-card__button--mark" href="#"
      >Camareira</a
    >
    <a class="brutalist-card__button brutalist-card__button--mark" href="#"
      >Cadarpio</a
    >
  </div>
</div>
</div>
<br><br><br><br><br>
@endsection

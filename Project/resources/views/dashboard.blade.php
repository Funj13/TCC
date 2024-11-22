@can ('admin')

@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection
<head>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  
</head>
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
    <div class="brutalist-card__alert ">Administração</div>
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
@elsecan('user')

<h1>Usuario Sem Permissão</h1>

@endcan
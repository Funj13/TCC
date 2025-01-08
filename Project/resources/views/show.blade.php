@extends('layouts.main')

@section('title', $room->nome)


@section('content')
@section('topnav')
@endsection
<head>
<meta name="format-detection" content="telephone=no">
    <meta name="viewport"
    content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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



<div class="containerQuarto">
    <div class="imagem-principal">
        <img src="/images/quartos/{{$room->image1}}" alt="Imagem principal do produto">
    </div>
    <div class="imagens-pequenas">
        <div class="imagem-pequena">
            <img src="/images/quartos/{{$room->image2}}" alt="Outro ângulo do produto">
        </div>
        <div class="imagem-pequena">
            <img src="/images/quartos/{{$room->image3}}" alt="Detalhe do produto">
        </div>
        <div class="imagem-pequena">
            <img src="/images/quartos/{{$room->image4}}" alt="Produto relacionado">
        </div>

    </div>

    <div class="informacoes-produto">
        <h2>{{$room->nome}}</h2>
        <p>Descrição detalhada do produto, incluindo suas características, funcionalidades e benefícios.</p>
        <p>Preço: R$ {{$room->preco}} Diaria</p>
        <button id="btnReservar" data-bs-target="#meuModal">RESERVAR</button>
        <script src="js/modalQuarto.js"></script><br>
    </div>

    <!--content modal-->
    <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$room->nome}}</h5>
                    <button type="button" class="btn-close close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <div class="modal-body">
                    <p>{{$room->nome}}.</p>
                    <p>Detalhes: <br>
                        2 suites <br>
                        total {{$room->preco}} Reais diaria.
                    </p>
                    <div class="reserva">

                        <form action="{{ route('reserva.enviar') }}" method="POST">
                            @csrf
                            <label for="">Nome:</label>
                            <input type="text" class="form-control" name="nome" />

                            <label for="">CPF:</label>
                            <input type="number" class="form-control" name="cpf"
                                data-inputmask="'mask': '999.999.999-99'" />
                            <label for="">Adicione o Dia em que deseja reservar o quarto:</label>
                            <input type="date" class="form-control meu-input-data" id="data-evento"
                                placeholder="DD/MM/AAAA" name="dt-checkin">
                            <label for="">Adicione o Dia em que deseja fazer check-out do quarto:</label>
                            <input type="date" class="form-control meu-input-data" id="data-evento"
                                placeholder="DD/MM/AAAA" name="dt-checkout">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="enviar">
                            Reservar</button>
                        <button type="button" class="btn btn-primary">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



@endsection
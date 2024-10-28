
@extends('layouts.main')

@section('title', 'Quarto')


@section('content')

@section('topnav')
@endsection


    <div class="container">
        <div class="imagem-principal">
            <img src="/images/Quarto_imperial_2.jpg" alt="Imagem principal do produto">
        </div>
        <div class="imagens-pequenas">
            <div class="imagem-pequena">
                <img src="/images/Quarto_imperial_1.jpg" alt="Outro ângulo do produto">
            </div>
            <div class="imagem-pequena">
                <img src="/images/Quarto_imperial_3.jpg" alt="Detalhe do produto">
            </div>
            <div class="imagem-pequena">
                <img src="/images/Quarto_imperial_4.jpg" alt="Produto relacionado">
            </div>
            
        </div>

        <div class="informacoes-produto">
            <h2>Quarto Imperial</h2>
            <p>Descrição detalhada do produto, incluindo suas características, funcionalidades e benefícios.</p>
            <p>Preço: R$ 100,00</p>
            <button id="btnContent" onclick="window.location.href='/'">RESERVAR</button><br>
        </div>
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
    </div>


@endsection
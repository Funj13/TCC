
@extends('layouts.main')

@section('title', 'Quarto')


@section('content')

@section('topnav')
@endsection


    <div class="container">
        <div class="imagem-principal">
            <img src="/images/img_quart_ang_2.jpeg" alt="Imagem principal do produto">
        </div>
        <div class="imagens-pequenas">
            <div class="imagem-pequena">
                <img src="/images/img_quart_ang_1.jpeg" alt="Outro ângulo do produto">
            </div>
            <div class="imagem-pequena">
                <img src="/images/img_quart_ang_3.jpeg" alt="Detalhe do produto">
            </div>
            <div class="imagem-pequena">
                <img src="/images/img_quart_ang_4.jpeg" alt="Produto relacionado">
            </div>
            
        </div>

        <div class="informacoes-produto">
            <h2>Suite Elegância Moderna</h2>
            <p>Descrição detalhada do produto, incluindo suas características, funcionalidades e benefícios.</p>
            <p>Preço: R$ 100,00</p>
            <button id="btnContent" onclick="window.location.href='/'">RESERVAR</button><br>
        </div>
    </div>


@endsection
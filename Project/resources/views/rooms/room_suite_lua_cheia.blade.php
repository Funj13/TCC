
@extends('layouts.main')

@section('title', 'Quarto')


@section('content')

@section('topnav')
@endsection


    <div class="container">
        <div class="imagem-principal">
            <img src="/images/suite_lua_cheia_1.webp" alt="Imagem principal do produto">
        </div>
        <div class="imagens-pequenas">
            <div class="imagem-pequena">
                <img src="/images/suite_lua_cheia_2.jpg" alt="Outro ângulo do produto">
            </div>
            <div class="imagem-pequena">
                <img src="/images/suite_lua_cheia_3.webp" alt="Detalhe do produto">
            </div>
            <div class="imagem-pequena">
                <img src="/images/suite_lua_cheia_4.jpg" alt="Produto relacionado">
            </div>
            
        </div>

        <div class="informacoes-produto">
            <h2>Suíte da Lua Cheia</h2>
            <p>Descrição detalhada do produto, incluindo suas características, funcionalidades e benefícios.</p>
            <p>Preço: R$ 100,00</p>
            <button id="btnContent" onclick="window.location.href='/'">RESERVAR</button><br>
        </div>
    </div>


@endsection
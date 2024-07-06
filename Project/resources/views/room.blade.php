
@extends('layouts.main')

@section('title', 'Quarto')


@section('content')

@section('topnav')
@endsection


    <div class="container">
        <div class="imagem-principal">
            <img src="https://via.placeholder.com/600x400" alt="Imagem principal do produto">
        </div>
        <div class="imagens-pequenas">
            <div class="imagem-pequena">
                <img src="https://via.placeholder.com/100x100" alt="Outro ângulo do produto">
            </div>
            <div class="imagem-pequena">
                <img src="https://via.placeholder.com/100x100" alt="Detalhe do produto">
            </div>
            <div class="imagem-pequena">
                <img src="https://via.placeholder.com/100x100" alt="Produto relacionado">
            </div>
            
        </div>

        <div class="informacoes-produto">
            <h2>Nome do Produto</h2>
            <p>Descrição detalhada do produto, incluindo suas características, funcionalidades e benefícios.</p>
            <p>Preço: R$ 100,00</p>
            <button>Reservar</button>
        </div>
    </div>


@endsection
@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

@guest
    <br><br><br>
    <!-- tela usuario sem login -->
    <div class="card ">
        <h1 class="text-align"><a>Faça login para visualizar seus pedidos.</a></h1>
    </div>

    <br><br><br><br><br><br>
@endguest

    <!-- content -->
    <div class="cadastroQuarto border" class="theme">
        <h1><a>Avaliação</a></h1>
        <a>Id do usuario: {{ $userId }} // Id do Quarto: {{ $roomId }}</a>
        <form action="{{ route('avaliacao.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="userId" value="{{ $userId }}">
            <input type="hidden" name="roomId" value="{{ $roomId }}">
            <label for="" class="">Mensagem:</label>
            <input type="text" class="form-control border" name="msg" />
            <label for="">Nota:</label>
            <div class="rating">
                <input type="radio" name="star" id="star1" value="star1"><label for="star1"></label>
                <input type="radio" name="star" id="star2" value="star2"><label for="star2"></label>
                <input type="radio" name="star" id="star3" value="star3"><label for="star3"></label>
                <input type="radio" name="star" id="star4" value="star4"><label for="star4"></label>
                <input type="radio" name="star" id="star5" value="star5"><label for="star5"></label>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success btn-position" data-bs-dismiss="enviar" name="enviar">
                Enviar</button>
        </form>
    </div>
    <div class="card">
        <h1><a>Suas Avaliações</a></h1>
    </div>




    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

@endsection
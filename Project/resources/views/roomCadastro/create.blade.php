@extends('layouts.admin')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection


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
            <button type="submit" class="btn btn-outline-success btn-position" data-bs-dismiss="enviar" name="enviar">
                Enviar</button>
                <button id ="togle-theme" class="btn bnt-primary" data-bs-dismiss="enviar" name="enviar">
                Enviar</button>
                
<script>
      const toggleThemeButton = document.getElementById('toggle-theme');
const bodyElement = document.getElementById('body');

// Adicionar evento de clique ao botão
toggleThemeButton.addEventListener('click', () => {
  // Verificar se o tema atual é light ou dark
  if (bodyElement.getAttribute('data-bs-theme') === 'light') {
    // Alterar para tema dark
    bodyElement.setAttribute('data-bs-theme', 'dark');
    bodyElement.classList.add('bg-dark');
    bodyElement.classList.add('text-white');
  } else {
    // Alterar para tema light
    bodyElement.setAttribute('data-bs-theme', 'light');
    bodyElement.classList.remove('bg-dark');
    bodyElement.classList.remove('text-white');
  }
});
      </script>
    </div>

@endsection
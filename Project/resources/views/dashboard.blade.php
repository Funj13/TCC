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
        <p><a class="btn btn-dark" href='/cadastroQuarto'>Cadastrar Quarto</a></p>
        <p><a class="btn btn-dark" href='/cadastroIndex'>gerenciar</a></p>
    </div>
</div>
<div>


    <br>
    <h2>Administração</h2>
    <br>

   
    <!--Content-->
    <div id="a">
        <!--Formulário-->
        <div class="content_donate">
            <h1>Administração</h1>
            <button id="btnContent" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
            aria-controls="offcanvasWithBothOptions" >Gerenciar</button><br>
            <button id="btnContent" >button</button><br>
            <button id="btnContent" >button 2</button><br>
        </div>
        <!--Café da Manha-->
        <div class="content_contact">
            <h1>Camareira</h1>
            <button id="btnContent" >Servicos</button><br>
            <button id="btnContent" >chamadas</button><br>
            <button id="btnContent" >button</button><br>
        </div>

    </div>
    <div>

        <!-- <h2>Logado Com Sucesso</h2>
        <br>
        <div class="menu-adm">
            <a href="/" class="btn btn-dark">Clique aqui para Continuar.</a>
        </div> -->

    </div>
</div>



@endsection

@section('footer')

@endsection
@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
    aria-controls="offcanvasWithBothOptions">cadastrar</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p><a class="btn btn-dark" href='/cadastroQuarto'>Cadastrar Quarto</a></p>

    </div>
</div>
<div>
    <h1>enviado ga</h1>
</div>
@endsection
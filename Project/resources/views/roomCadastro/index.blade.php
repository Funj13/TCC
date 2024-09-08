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
    <div class="Tabela_Quartos">
        <h2>Quartos Registrados</h2>

        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Tipagem</th>
                <th>Preço</th>
                <th>Disponibilidade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

            @foreach($rooms as $room)
                <tr>
                    <th> {{ $room->id }} </th>
                    <th> {{ $room->nome }} </th>
                    <th> {{ $room->tipagem }} </th>
                    <th> {{ $room->preco_por_noite }} </th>
                    <th> {{ $room->disponibilidade }} </th>

                    <th> <a href="{{ url('/editar') }}" class="btn btn-primary">Editar</a> </th>
                    <th>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</>
                        </form>
                    </th>

                </tr>
            @endforeach



        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    @endsection
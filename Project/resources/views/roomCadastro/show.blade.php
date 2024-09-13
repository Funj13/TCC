<!-- @extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<div class="editQuarto">

    <form method="POST" action="{{ route('rooms.update') }}">
        @csrf
        @method('PUT')

        @foreach($rooms as $room)
            <div>
                <label for="">Tipagem:</label>
                    <input type="text" class="form-control" name="tipo" value="{{ $room->tipagem }}" />
                    <label for="">Preço:</label>
                    <input type="number" class="form-control" name="preco" value="{{ $room->preco_por_noite }}" />
                    <label for="">Disponibilidade:</label>
                    <input type="number" min="0" max="1" class="form-control " name="dispo"
                        value="{{ $room->disponibilidade }}" />
                    <label for="">Nome:</label>
                    <input type="name" class="form-control " id="nome" name="nome" value="{{ $room->nome }}">

                    <button type="submit">Salvar alterações</button>
            </div>
        @endforeach
    </form>
</div>


@endsection -->
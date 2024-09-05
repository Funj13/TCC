<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('roomCadastro.index', compact('roomCadastro'));
    }

    public function create()
    {
        return view('roomCadastro.create');
    }

    public function store(Request $request)
    {
        try {
            // Validar os dados do formulário
            $this->validate($request, [
                'nome' => 'required|string',
                'dispo' => 'required|int',
                'preco' => 'required|int',
                'tipo' => 'required|string',
            ]);



        $room = new Room();
        $room->id = $request->input('');
        $room->tipagem = $request->input('tipo');
        $room->preco = $request->input('preco');
        $room->disponibilidade = $request->input('dispo');
        $room->nome = $request->input('nome');

        $room->save();
        return redirect()->route('roomCadastro.index');

    }catch (\Exception $e) {
        dd($e->getMessage());
    }
    }

    public function show($id)
    {
        $room = Room::find($id);
        return view('roomCadastro.show', compact('roomCadastro'));
    }

    public function edit($id)
    {
        $room = Room::find($id);
        return view('roomCadastro.edit', compact('roomCadastro'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->capacity = $request->input('capacity');
        $room->save();
        return redirect()->route('roomCadastro.index');
    }

    public function destroy($id)
    {
        Room::destroy($id);
        return redirect()->route('roomCadastro.index');
    }
}
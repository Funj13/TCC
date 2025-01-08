<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{

    // listar todos quartos
    public function index()
    {
        $rooms = Room::all();
        return view('roomCadastro.index', compact('rooms'));
    }

    // public function create()
    // {
    //     return view('roomCadastro.create');
    // }

    public function store(Request $request)
    {
        try {
            // Validar os dados do formulário
            $this->validate($request, [
                'nome' => 'required|string',
                'dispo' => 'required|int',
                'preco' => 'required|int',
                'tipo' => 'required|string',
                'image' => 'nullable|image|max:2048',
            ]);

            $room = new Room();
            $room->id = $request->input('');
            $room->tipo = $request->input('tipo');
            $room->preco = $request->input('preco');
            $room->disponibilidade = $request->input('dispo');
            $room->nome = $request->input('nome');

            // uploud Image

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->file('image');
            
                // Obter a extensão da imagem
                $extension = $requestImage->getClientOriginalExtension();
            
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;
            
                $requestImage->move(public_path('images/quartos'), $imageName);
            
                $room->image = $imageName;
            }


            $room->save();
            return redirect()->route('home')->with('msg', 'Quarto Criado Com Sucesso');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }


    public function update(Request $request)
    {
        
        $this->validate($request, [
            'quartos_id' => 'required|int',
            'nome' => 'required|string',
            'dispo' => 'required|int',
            'preco' => 'required|int',
            'tipo' => 'required|string',
        ]);

        $room = Room::find(id: $request->input('quartos_id'));
        $room->tipo = $request->input('tipo');
        $room->preco = $request->input('preco');
        $room->disponibilidade = $request->input('dispo');
        $room->nome = $request->input('nome');
        $room->save();
        return view('dashboard', compact('room'));
    }

    public function destroy($id)
    {
        // Recuperar o registro a ser excluído
        $room = Room::find($id);

        // Excluir o registro
        $room->delete();
        return redirect()->route('home');
    }




    // listar quartos
    // public function show($id)
    // {
    //     $room = Room::find($id);
    //     return view('roomCadastro.index', compact('roomCadastro'));
    // }


    // public function edit($id)
    // {
    //     $rooms = Room::find($id);
    //     return view('roomCadastro.edit', compact('rooms'));
    // }



}
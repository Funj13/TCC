<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Avaliacao;
use App\Http\Controllers\AvaliarController;

class RoomController extends Controller
{

    // listar todos quartos
    public function index()
    {
        $rooms = Room::all();
      
        return view('roomCadastro.index', compact('rooms'));
    }

    public function welcome()
    {
        $rooms = Room::all();
        $avaliacaos = Avaliacao::all();
        // dd($avaliacaos);
        return view('welcome', compact('rooms', 'avaliacaos'));
    }
    public function comentarios()
    {
        
        return view('welcome', compact('avaliacaos'));
    }

    public function welcomequartos()
    {
        $rooms = Room::all();
        return view('viewquartos', compact('rooms'));
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
            'images.*' => 'nullable|image|max:2048', // Permitir múltiplas imagens
        ]);

        $room = new Room();
        $room->tipo = $request->input('tipo');
        $room->preco = $request->input('preco');
        $room->disponibilidade = $request->input('dispo');
        $room->nome = $request->input('nome');

        // Upload das Imagens
        if ($request->hasFile('images')) {
            $imageNames = []; // Array para armazenar os nomes das imagens

            foreach ($request->file('images') as $requestImage) {
                if ($requestImage->isValid()) {
                    // Obter a extensão da imagem
                    $extension = $requestImage->getClientOriginalExtension();
                    $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

                    // Mover a imagem para o diretório desejado
                    $requestImage->move(public_path('images/quartos'), $imageName);

                    // Adicionar o nome da imagem ao array
                    $imageNames[] = $imageName;
                }
            }

            // Armazenar as imagens em colunas separadas
            // Supondo que você tenha colunas image1, image2, image3, image4 na tabela rooms
            $room->image1 = $imageNames[0] ?? null; // Armazena a primeira imagem
            $room->image2 = $imageNames[1] ?? null; // Armazena a segunda imagem
            $room->image3 = $imageNames[2] ?? null; // Armazena a terceira imagem
            $room->image4 = $imageNames[3] ?? null; // Armazena a quarta imagem
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

    // Criar a Tela do Quarto
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('show', ['room' => $room]);
    }





    // public function edit($id)
    // {
    //     $rooms = Room::find($id);
    //     return view('roomCadastro.edit', compact('rooms'));
    // }



}
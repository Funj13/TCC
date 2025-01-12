<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avaliacao;

class AvaliarController extends Controller
{
    public function index()
    {



        return view('avaliar');
    }

    public function create($userId, $roomId)
    {
        return view('avaliar', compact('userId', 'roomId'));
    }

    public function store(Request $request)
    {
        // dd($request);
        try {
            // Validar os dados do formulário
            $this->validate($request, [
                'msg' => 'required|string',
                'star'=> 'required|string',
                'userId' => 'required|int',
                'roomId' => 'required|int',
            ]);

            // Criar um novo registro no banco de dados
            $formulario = new Avaliacao();
            $formulario->msg = $request->input('msg');
            $formulario->avaliacoes = 'avaliado';
            $formulario->rate = $request->input('star');
            $formulario->userId = $request->input('userId');
            $formulario->roomId = $request->input('roomId');
            // Salvar a reserva 
            $formulario->save();
            return redirect()->back()->with('success', 'Quarto reservado com sucesso!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }


}

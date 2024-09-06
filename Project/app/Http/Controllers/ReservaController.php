<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function enviar(Request $request)
    
    {
        // dd('Método enviar chamado!');

        try {
        // Validar os dados do formulário
        $this->validate($request, [
            'nome' => 'required|string',
            'cpf' => 'required|int',
            'dt-checkin' => 'required|date',
            'dt-checkout' => 'required|date',

        ]);

        // Criar um novo registro no banco de dados
        $formulario = new Reserva();
        $formulario->nome = $request->input('nome');
        $formulario->cpf = $request->input('cpf');
        $formulario->dt_checkin = $request->input('dt-checkin');
        $formulario->dt_checkout = $request->input('dt-checkout');

        $formulario->save();

        return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
    }catch (\Exception $e) {
        dd($e->getMessage());
    }
    }
}

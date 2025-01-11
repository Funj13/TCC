<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Models\User;

class ReservaController extends Controller
{
    public function index()
    {

        $reservas = User::join('reserva_user', 'users.id', '=', 'reserva_user.user_id')
            ->join('reservas', 'reserva_user.reserva_id', '=', 'reservas.id')
            ->join('rooms', 'reserva_user.room_id', '=', 'rooms.id')
            ->select('users.*', 'reservas.*', 'rooms.*', 'reserva_user.*')
            ->get();

        return view('viewpedidos', compact("reservas"));
    }


    public function enviar(Request $request, $id)
    {
        $user = auth()->user();

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
            // Salvar a reserva
            $formulario->save();


            // Associar a reserva ao usuário e ao quarto
            $user->reservas()->attach($formulario->id, [
                'room_id' => $id, // ID do quarto
                'user_id' => $user->id // ID do usuário, se necessário
            ]);

            return redirect()->back()->with('success', 'Quarto reservado com sucesso!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}


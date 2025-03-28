<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index()
    {
        $user = auth()->user()->id;

        $reservas = User::join('reserva_user', 'users.id', '=', 'reserva_user.user_id')
            ->join('reservas', 'reserva_user.reserva_id', '=', 'reservas.id')
            ->join('rooms', 'reserva_user.room_id', '=', 'rooms.id')
            ->select('users.*', 'reservas.*', 'rooms.*', 'reserva_user.*')
            ->where('users.id', $user)
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
            $formulario->status = 'pendente';
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
    public function destroy($reservaId, $roomId)
    {
        // Verificar se a relação existe
        $deleted = DB::table('reserva_user')
            ->where('reserva_id', $reservaId)
            ->where('room_id', $roomId)
            ->delete();

        if ($deleted) {
            return redirect()->back()->with('success', 'Quarto removido da reserva com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Quarto não encontrado na reserva.');
        }
    }
    public function update($id)
    {
        // Encontrar a reserva pelo ID
        $reserva = Reserva::find($id);


        $status = DB::table('reservas')
        ->where('id', $id)
        ->value('status');

        $statusPadrao = 'pendente';
        $statusConf = 'confirmado';
        if (!$reserva) {
            return redirect()->back()->with('error', 'Reserva não encontrada.');
        }

        // dd($id, $status);

        if ($statusPadrao == $status) {
            // Atualizar o campo status
            $reserva->status = $statusConf;
            $reserva->save(); // Salvar as alterações

            return redirect()->back()->with('success', 'Status atualizado com sucesso!');

        } else {
            // Atualizar o campo status
            $reserva->status = $statusPadrao;
            $reserva->save(); // Salvar as alterações

            return redirect()->back()->with('success', 'Status atualizado com sucesso!');

        }
    }
}


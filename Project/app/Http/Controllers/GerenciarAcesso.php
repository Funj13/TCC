<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Camareira;
use App\Models\Model_has_permission;
use App\Models\Permission;
use Carbon\Carbon;


class GerenciarAcesso extends Controller
{
    public function getDashboardData()
{
    $users = User::with('permissions')
    ->select('u.id', 'u.name', 'p.name AS permission_name') 
    ->from('users AS u')
    ->join('model_has_permissions AS m', 'u.id', '=', 'm.model_id')
    ->join('permissions AS p', 'm.permission_id', '=', 'p.id')
    ->get();

    $camareiras = Camareira::all();

    $last31Days = Carbon::now()->subDays(31);
    $newUsersCount = User::where('created_at', '>=', $last31Days)->count();


    $anoEspecifico = 2024;
    $usuariosNoAno2024 = User::whereYear('created_at', $anoEspecifico)->count();

    $anoEspecifico = 2025;
    $usuariosNoAno2025 = User::whereYear('created_at', $anoEspecifico)->count();
    
  

    return view('dashboard', compact('users', 'camareiras', 'newUsersCount', 'usuariosNoAno2024', 'usuariosNoAno2025' ));
}

public function updatePermission(User $user, $permissionName)
{
    if($permissionName == 'admin'){
        $user->revokePermissionTo('admin');
        $user->givePermissionTo('user');
    }
    elseif($permissionName == 'user'){
        $user->revokePermissionTo('user');
        $user->givePermissionTo('admin');
    }
    return redirect()->back()->with('success', 'Permissão atualizada com sucesso!');
}
public function getUsuariosPorSemana()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $usuariosPorDia = [];

        for ($i = 0; $i < 7; $i++) {
            $dia = $startOfWeek->copy()->addDays($i);
            $usuariosPorDia[] = User::whereDate('created_at', $dia)->count();
        }
        // dd($usuariosPorDia);
        // return view("tickets.js", compact("usuariosPorDia"));
        return response()->json($usuariosPorDia);
    }

}


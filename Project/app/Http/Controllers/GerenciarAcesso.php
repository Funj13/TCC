<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Camareira;
use App\Models\Model_has_permission;
use App\Models\Permission;


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
    return view('dashboard', compact('users', 'camareiras'));
}

public function updatePermission(User $user, Model_has_permission $permissions)
    {
        // Verifica se o usuário já possui a permissão
        $hasPermission = $user->hasPermissionTo($permissions);

        if ($hasPermission) {
            // Se já possui, revoga a permissão
            $user->revokePermissionTo($permissions);
        } else {
            // Se não possui, atribui a permissão
            $user->givePermissionTo($permissions);
        }

        return redirect()->back()->with('success', 'Permissão atualizada com sucesso!');
    }
}


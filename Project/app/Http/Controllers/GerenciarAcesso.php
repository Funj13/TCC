<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Camareira;
use App\Models\Model_has_permission;

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

public function update(User $user)
{
    $user->permission_id = '1';
    $user->save();

    return redirect()->back()->with('success', 'Tipo de usuário alterado com sucesso!');
}
}


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

public function updatePermission(User $user, $permissionName, $userId)
{
    var_dump($userId);
    if ($user->id != $userId) {
        // Tratar o erro (por exemplo, redirecionar com mensagem de erro)
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar as permissões.');
    }


    if($permissionName = 'admin'){
        $user->revokePermissionTo('admin');
        $user->givePermissionTo('user');
       
    }
    elseif($permissionName = 'user'){
        $user->revokePermissionTo('user');
        $user->givePermissionTo('admin');
        
    }
    
    return redirect()->back()->with('success', 'Permissão atualizada com sucesso!');
    
}
}


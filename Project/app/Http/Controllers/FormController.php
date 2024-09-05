<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('formulario');
    }

    public function storeData(Request $request)
    {
        // Validação dos dados (opcional)
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        // Cria um novo registro no banco de dados
        // Substitua 'YourModel' pelo nome do seu modelo
        YourModel::create($request->all());

        return redirect()->back()->with('success', 'Dados salvos com sucesso!');
    }
}
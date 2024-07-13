<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

header("Content-type: text/css; charset: UTF-8");

class ThemeModeController extends Controller
{

    public function modeTheme(Request $request)
    {

// Verifica se o tema atual está definido
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

// Estilos para o tema claro
if ($theme == 'light') {
    echo "
    body {
        background-color: #ffffff;
        color: #333333;
    }

    header, main, footer {
        padding: 20px;
        margin: 10px;
        border: 1px solid #cccccc;
    }
    ";
} 
// Estilos para o tema noturno
elseif ($theme == 'dark') {
    echo "
    body {
        background-color: #333333;
        color: #ffffff;
    }

    header, main, footer {
        padding: 20px;
        margin: 10px;
        border: 1px solid #666666;
    }
    ";
}
}
}



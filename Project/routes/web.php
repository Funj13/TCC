<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Room;
use App\Http\Controllers\GerenciarAcesso;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AvaliarController;

// use App\Http\Controllers\CamareiraController;
/* função inserção imgs do carrousel  */
Route::get('/carrousel-image-1', function () {
    return response()->file(public_path('images/img_suite_wood.webp'));
});
Route::get('/carrousel-image-2', function () {
    return response()->file(public_path('images/img_suite_moderna_1.jpg'));
});
Route::get('/carrousel-image-3', function () {
    return response()->file(public_path('images/Quarto_Serenidade_4.jpg'));
});

require __DIR__ . '/auth.php';

// Welcome
Route::get('/', [RoomController::class, 'welcome'])->name('welcome');
// Welcome Quartos
Route::get('/quartos', [RoomController::class, 'welcomequartos'])->name('viewquartos');
// Dashboard
Route::get('/dashboard', [GerenciarAcesso::class, 'getDashboardData'])->middleware(middleware: ['auth', 'verified'])->name('dashboard');
// Tela Index do Cadastro
Route::get('/cadastroIndex', [\App\Http\Controllers\RoomController::class, 'index'])->name('home');
// Tela Localização
Route::get('/mapa', function () {
    return view('mapa');
});
// Tela Formulario Quarto
Route::get('/cadastroQuarto', function () {
    return view('roomCadastro/create');
});
// TelaCadarpio
Route::get('/cadarpio', function () {
    return view('menu');
});
// Tela Pedidos
Route::get('/pedidos', [ReservaController::class, 'index'])->name('viewpedidos');


// cadastro avaliacao
// Tela Avaliação

// Rota para exibir a tela de avaliação
Route::get('/AvaliacaoCadastro/store/avaliacao/{userId}/quartos/{roomId}', [AvaliarController::class, 'create'])->name('avaliacao.create');

// Rota para armazenar a avaliação
Route::post('/AvaliacaoCadastro/store', [AvaliarController::class, 'store'])->name('avaliacao.store');


// Profile User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Função Permissão Usuario Updater
Route::put('/users/{user}/permissions/{permission}', [GerenciarAcesso::class, 'updatePermission'])
    ->name('users.permissions.update');
// Funções Cadastro Quartos
Route::post('/roomCadastro/store', [RoomController::class, 'store'])->name('rooms.store');
Route::post('/roomCadastro/update', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('/roomCadastro/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
Route::get('{id}', [RoomController::class, 'show']);





// Função iserção de img logo
Route::get('/logo-pinguem', function () {
    return response()->file(public_path('images/logo.png'));
});

// Função inserção de img icon
Route::get('/icon-pinguem', function () {
    return response()->file(public_path('images/icon.png'));
});


Route::delete('/reservas/{reservaId}/quartos/{roomId}', [ReservaController::class, 'destroy'])->name('reservas.destroy');
Route::post('/reserva/confirmar/{id}', [ReservaController::class, 'update'])->name('reservas.update');

// Routes get Rooms


// Tela Pagamento
Route::get('/pagamento', function () {
    return view('payment');
});

Route::post('/reserva/enviar/{id}', [ReservaController::class, 'enviar'])->name('reserva.enviar');




Route::get('/editarRoom/{id_room}', function (int $id_room) {
    $room = Room::find($id_room);
    return view('roomCadastro/edit', compact('room'));
});


// ????
// Route::get('/editar', [\App\Http\Controllers\RoomController::class, 'update']) ->name('edit');



Route::get('/api/usuarios-semana', [GerenciarAcesso::class, 'getUsuariosPorSemana']);

Route::get('/api/usuarios-mes', [GerenciarAcesso::class, 'getUsuariosPorMes']);
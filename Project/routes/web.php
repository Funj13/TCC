<?php

use App\Http\Controllers\ImgQuartosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Profile User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/user_name', function (){
//     ProfileController::class;
// });

require __DIR__.'/auth.php';

/* função inserção imgs do carrousel  */
Route::get('/carrousel-image-1', function () {
    return response()->file(public_path('images/img_hotel_1.jpg'));
});
Route::get('/carrousel-image-2', function () {
    return response()->file(public_path('images/img_hotel_2.jpg'));
});
Route::get('/carrousel-image-3', function () {
    return response()->file(public_path('images/img_hotel_3.jpg'));
});
Route::get('/carrousel-image-4', function (){
    return response()->file(public_path('images/img_hotel_4.jpg'));
});

// Função iserção de img logo

Route::get('/logo-pinguem', function(){
    return response()->file(public_path('images/logo.png'));
});

// Função inserção de img icon

Route::get('/icon-pinguem', function (){
    return response()->file(public_path('images/icon.png'));
});


// Função inserção img quartos index
// Route::get('/img-quartos', 'ImgQuartosController@show');
Route::get('/img-quartos', [ImgQuartosController::class, 'show']);


// Routes get Rooms

Route::get('/Quarto-Suite-Elegancia-Moderna', function () {
    return view('\rooms\room_suite_elegant');
});

Route::get('/Quarto-da-Paz', function () {
    return view('\rooms\romm_Quarto_da_Paz');
});

Route::get('/Quarto-Imperial', function () {
    return view('\rooms\romm_Quarto_imperial');
});

Route::get('/Quarto-Serenidade', function () {
    return view('\rooms\room_Quarto_Serenidade');
});

Route::get('/Suite-Eden', function () {
    return view('\rooms\room_suite_eden');
});

Route::get('/Suite-Marfim', function () {
    return view('\rooms\room_suite_marfim');
});

Route::get('/Suite-Lua-Cheia', function () {
    return view('\rooms\room_suite_lua_cheia');
});

Route::get('/Suite-Tropical', function () {
    return view('\rooms\room_suite_tropical');
});

Route::get('/Suite-Luxo', function () {
    return view('\rooms\room_suite_luxo');
});
// TelaCadarpio

Route::get('/cadarpio', function () {
    return view('menu');
});


Route::get('/pagamento', function(){
    return view('payment');
});

use App\Http\Controllers\ReservaController;

Route::post('/reserva/enviar', [ReservaController::class, 'enviar'])->name('reserva.enviar');

Route::get('/cadastroQuarto', function(){
    return view('roomCadastro/create');
});


use App\Http\Controllers\RoomController;

Route::post('/roomCadastro/update', [RoomController::class, 'update'])->name('rooms.update');

Route::get('/editar', [\App\Http\Controllers\RoomController::class, 'update']) ->name('edit');

Route::get('/editar', function(){
    return view('roomCadastro/edit');
});
Route::post('/roomCadastro/store', [RoomController::class, 'store'])->name('rooms.store');

// Route::delete('rooms/{id}', 'RoomController@destroy')->name('rooms.destroy');

Route::delete('/roomCadastro/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');

Route::get('/cadastroIndex',[\App\Http\Controllers\RoomController::class, 'index']) ->name('home');


use App\Http\Controllers\listaquartosController;
Route::get('/posts', [listaquartosController::class, 'index']);



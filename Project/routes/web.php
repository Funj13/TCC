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

Route::get('/quarto', function () {
    return view('\rooms\room');
});

Route::get('/quarto', function () {
    return view('\rooms\room');
});



// TelaCadarpio
Route::get('/cadarpio', function () {
    return view('menu');
});
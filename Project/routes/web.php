<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
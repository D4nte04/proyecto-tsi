<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\FuncionarioController;

//Login como 1era pagina
Route::get('/',[HomeController::class, 'login'])->name('home.login');
Route::get('/registrar',[HomeController::class, 'registrar'])->name('home.registrar');

//Usuario
Route::get('/alumno',[AlumnoController::class, 'index'])->name('alumno.index');


//Funcionario
Route::get('/funcionario',[FuncionarioController::class, 'index'])->name('funcionario.index');

// Route::get('/');


// Route::get('/dashboard', function () {
//     // if logged in
    
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
 
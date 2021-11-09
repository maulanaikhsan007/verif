<?php

use App\Http\Controllers\VerifController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Verif
Route::get('/verif', [VerifController::class, 'index']);
Route::get('/verif/rizky', [VerifController::class, 'rizky'])->name('verif.rizky');
Route::post('/verif', [VerifController::class, 'store'])->name('verif.store');
Route::get('/verif/edit/{id_kelas}', [VerifController::class, 'edit'])->name('verif.edit');
Route::put('/verif/update/{id_kelas}', [VerifController::class, 'update'])->name('verif.update');
Route::get('/verif/destroy/{id_kelas}', [VerifController::class, 'destroy'])->name('verif.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

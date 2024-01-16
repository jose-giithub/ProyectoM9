<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinacionesController;
use App\Http\Controllers\DestinoController;

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
Route::get('/destinaciones', [DestinacionesController::class, 'index'])->name('destinaciones');

// En lace que lleva al la info del destino
Route::get('destino1', [DestinoController::class, 'mostrar1'])->name('destino1');//Ruta destino Maspujols 
Route::get('destino2', [DestinoController::class, 'mostrar2'])->name('destino2');//Ruta destino Cudillero 
Route::get('destino3', [DestinoController::class, 'mostrar3'])->name('destino3');//Ruta destino Tarragona

    //Ruta destino Cabárceno
    //Ruta destino Gigantes
    //Ruta destino Monfragüe
<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\BicicletaController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\EstratoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Models\Regional;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

Route::get('/', [AuthController::class, 'showLogin']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('users', UserController::class)->except(['show'])->names('users');
Route::resource('roles', RoleController::class)->except(['show'])->names('roles');
Route::resource('permisos', PermissionsController::class)->except(['show'])->names('permisos');
Route::resource('alquileres', AlquilerController::class)->except(['show'])->names('alquileres');
Route::resource('bicicletas', BicicletaController::class)->except(['show', 'create'])->names('bicicletas');
Route::resource('centros', CentroController::class)->except(['show','index'])->names('centros');
Route::resource('estratos', EstratoController::class)->except(['show'])->names('estratos');
Route::resource('eventos', EventoController::class)->except(['show', 'create'])->names('eventos');
Route::resource('regionales', RegionalController::class)->except(['show'])->names('regionales');
Route::resource('inscripciones', InscripcionController::class)->except(['show'])->names('inscripciones');

Route::prefix('regionales')->group(function() {
    Route::get('getCentrosMaps/{reginalId}', [RegionalController::class, 'getCentrosMaps'])->name('regionales.getCentrosMaps');
});

Route::prefix('users')->group(function() {
    Route::post('/updateProfile/{profile}', [UserController::class, 'updateProfile'])->name('users.updateProfile');
});
Route::prefix('eventos')->group(function() {
    Route::get('/todos', [EventoController::class, 'allevent'])->name('eventos.todos');
});
Route::prefix('alquileres')->group(function() {
    Route::get('/user', [AlquilerController::class, 'user'])->name('alquileres.user');
});
Route::prefix('alquileres')->group(function() {
    Route::get('/index/{centro}', [AlquilerController::class, 'index'])->name('alquileres.index');
});

Route::prefix('centros')->group(function () {
    Route::get('/index/{regional}', [CentroController::class, "index"])->name("centros.index");
    Route::get('/create/{regional}', [CentroController::class, "create"])->name("centros.create");
});
Route::prefix('eventos')->group(function () {
    Route::get('/index/{centro}', [EventoController::class, "index"])->name("eventos.index");
    Route::get('/create/{centro}', [EventoController::class, "create"])->name("eventos.create");
});
Route::prefix('bicicletas')->group(function () {
    Route::get('/index/{centro}', [BicicletaController::class, "index"])->name("bicicletas.index");
    Route::get('/create/{centro}', [BicicletaController::class, "create"])->name("bicicletas.create");
});
Route::prefix('inscripciones')->group(function () {
    Route::get('/index/{evento}', [InscripcionController::class, "index"])->name("inscripciones.index");
    Route::get('/create/{evento}', [InscripcionController::class, "create"])->name("inscripciones.create");
});

require __DIR__.'/auth.php';

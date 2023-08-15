<?php
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


// Route::get('/', [IntelController::class, 'welcome'])->name('welcome');

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemSetController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    // Modul Unit
    Route::resource('/units', UnitController::class);

    // Modul Set ALat 
    Route::resource('/item-sets', ItemSetController::class);

    // Modul Alat
    Route::resource('/items', ItemController::class);

    // Modul User
    Route::resource('/users', UserController::class);
    Route::put('/users/{user:id}/pindah', [UserController::class, 'pindahkan']);
    Route::put('/users/{user:id}/update-password', [UserController::class, 'updatePassword']);
    Route::put('/users/{user:id}/akses', [UserController::class, 'akses']);

    // Modul Penyerahan
    Route::resource('/submissions', SubmissionController::class);
});


require __DIR__ . '/auth.php';
require __DIR__ . '/default_menu.php';

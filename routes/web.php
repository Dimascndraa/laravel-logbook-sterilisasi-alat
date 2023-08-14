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
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('/units', UnitController::class);
    Route::resource('/item-sets', ItemSetController::class);
    Route::resource('/items', ItemController::class);
});


require __DIR__ . '/auth.php';
require __DIR__ . '/default_menu.php';

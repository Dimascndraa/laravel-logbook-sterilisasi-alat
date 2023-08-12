<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormpluginsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\InfoappController;
use App\Http\Controllers\IntelController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\UtilitiesController;
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


// Route::get('/', [IntelController::class, 'welcome'])->name('welcome');

require __DIR__ . '/auth.php';
require __DIR__ . '/default_menu.php';

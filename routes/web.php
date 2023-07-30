<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,SubscribeController};
use App\Http\Controllers\LangController;

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


Route::get('/',HomeController::class);
Route::post('subscribe',SubscribeController::class)->name('subscribe.store');
Route::get('/lang/{lang}', LangController::class)->name('change-lang');

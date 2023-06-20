<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalogController;

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

Route::controller(AnalogController::class)->group(function (){
    Route::get('/genshin_impact', 'genshin_impact')->name('genshin_impact');
});
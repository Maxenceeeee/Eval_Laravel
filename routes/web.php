<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolsController;
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


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [VolsController::class, 'show']);

Route::get('/tableau', [VolsController::class, 'index']);

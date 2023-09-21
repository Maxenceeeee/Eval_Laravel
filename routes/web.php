<?php

use App\Models\aeroports;
use App\Models\compagnies;
use App\Models\vols;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vols', volsController::class);
Route::resource('aeroports', aeroportsController::class);
Route::resource('compagnies', compagniesController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countryController;


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

Route::get('/country/create', [countryController::class, 'create']);
Route::post('/country/create', [countryController::class, 'store']);

Route::get('/country', [countryController::class, 'countryList']);
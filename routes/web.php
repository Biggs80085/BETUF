<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\InterventionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('home');
});

//Route::get('/login', [AuthController::class,'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Planning
Route::get('/planning', function () {
    return view('planning')->with('user',Auth::user());
});
Route::resource('/calendar', EventController::class);

// Admin

Route::get('/addIntervention', [InterventionController::class, 'index']);
Route::post('/addInter', [InterventionController::class, 'add']);

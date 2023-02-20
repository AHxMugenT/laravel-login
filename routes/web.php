<?php

use App\Models\UserData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\DashboardController;

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

Route::get('/w4t5w4', function () {
    return view('welcome');
});


// Route::get('/user/{user}', [UserDataController::class, 'show']);
// Route::get('/form', [UserDataController::class, 'index']);
// Route::post('/form', [UserDataController::class, 'store']);


Route::get('/', [AuthController::class, 'loginPage']);
Route::post('/', [AuthController::class, 'loginAuth']);

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'registerAuth']);


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user', [DashboardController::class, 'show']);


Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'store']);

Route::get('/form', [ProfileController::class, 'FormPage']);
Route::post('/form', [ProfileController::class, 'FormRegis']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;

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
    return view('users');
});

// Rute untuk pengguna (user)
Route::post('/user/register', [UserController::class, 'register']);
Route::post('/user/login', [UserController::class, 'login']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::get('/user/{id}', [UserController::class, 'get']);
Route::post('/user/logout', [UserController::class, 'logout']);

// Rute untuk kontak (contact)
Route::post('/contact/create', [ContactController::class, 'create']);
Route::put('/contact/{id}', [ContactController::class, 'update']);
Route::get('/contact/{id}', [ContactController::class, 'get']);
Route::get('/contact/search', [ContactController::class, 'search']);
Route::delete('/contact/{id}', [ContactController::class, 'remove']);

// Rute untuk alamat (address)
Route::post('/address/create', [AddressController::class, 'create']);
Route::put('/address/{id}', [AddressController::class, 'update']);
Route::get('/address/{id}', [AddressController::class, 'get']);
Route::get('/address/search', [AddressController::class, 'search']);
Route::delete('/address/{id}', [AddressController::class, 'remove']);

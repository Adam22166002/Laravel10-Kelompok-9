<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\BankController;

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
    return view('sesi.index');
});

Route::resource('/data', BankController::class);

Route::get('/sesi', [SessionController::class,'index'])->name('login');
Route::post('/proses_login', [SessionController::class, 'proses_login']);

Route::get('/pendaftaran', [SessionController::class,'pendaftaran']);
Route::post('/proses_pendaftaran', [SessionController::class, 'proses_pendaftaran']);

Route::post('/logout', [SessionController::class, 'logout'])->name('logout');


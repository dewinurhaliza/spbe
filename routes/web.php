<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboardadmin', function () {
    return view('admin.dashboard_admin');
})->middleware('auth');


//USER
Route::get('/', function () {
    return view('dashboard_user');
});

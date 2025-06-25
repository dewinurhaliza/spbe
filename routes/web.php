<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;

//ADMIN
Route::get('/login', function () { return view('admin/login'); });

Route::get('/download', function () { return view('admin/download'); })->name('admin.download');
Route::get('/admin/download/create', [DownloadController::class, 'create'])->name('download.create');



//USER
Route::get('/', function () {
    return view('dashboard_user');
});

<?php

use Illuminate\Support\Facades\Route;

//ADMIN
Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/dashboardadmin', function () {
    return view('admin/dashboard_admin');
});


//USER
Route::get('/', function () {
    return view('dashboard_user');
});

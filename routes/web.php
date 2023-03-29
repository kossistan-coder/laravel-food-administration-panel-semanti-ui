<?php

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

Route::get('/overview', function () {
    return view('admins.overview');
})->name('overview');

Route::get('/login',function (){
    return view('admins.login');
})->name('login');

Route::get('/users',function (){
    return view('admins.users');
})->name('users');

Route::get('/restaurant',function (){
    return view('admins.restaurant');
})->name('restaurant');
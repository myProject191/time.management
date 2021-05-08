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
Route::get('test', 'TaskController@retTaskAll');


Route::get('/', function () {
    return view('./auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('home');
// })->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/home','HomeController@home')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/record', function () {
    return view('record');
})->name('record');

Route::middleware(['auth:sanctum', 'verified'])->get('/measurement', function () {
    return view('measurement');
})->name('measurement');

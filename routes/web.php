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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', 'Admin\HomeController@index')->name('homeAdmin');

    Route::resource('category', Admin\CategoryController::class);
    Route::resource('post', Admin\PostController::class);
});

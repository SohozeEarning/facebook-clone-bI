<?php

use App\Http\Controllers\PostController;
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

Route::get('posts/create',[PostController::class,'create'])->name('posts.create');;
Route::post('posts/create',[PostController::class,'store'])->name('posts.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

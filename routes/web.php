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


Auth::routes();

Route::group(
    [
        'middleware' => 'auth',  // middleware 
        'controller' => PostController::class, // gennearlize controller
        'as' => 'posts.', // gennearlize name prefix
        'prefix' => 'posts/' // gennearlize url prefix
    ],
    function () {
        Route::get('create',  'create')->name('create');
        Route::get('index', 'index')->name('index');
        Route::post('create', 'store')->name('store');
        Route::delete('destroy/{post}','destroy')->name('destroy');
    }
);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

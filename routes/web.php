<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

// ADMIN PANEL
Route::prefix('admin')->group(function () {
    
    Route::get('/', function () {
        return view('admin.index');
    });
    
    
    
    
    
    
    
    // news
    Route::get('/news', function () {
        return view('admin.news.index');
    });

    Route::get('/news/show', function () {
        return view('admin.news.show');
    });

    Route::get('/news/edit', function () {
        return view('admin.news.edit');
    });

    Route::get('/news/delete', function () {
        return view('admin.news.delete');
    });

    Route::get('/news/create', function () {
        return view('admin.news.create');
    });
    
    
    
    
    
    
    
    
    
    
    // sliders
    Route::get('/sliders', function () {
        return view('admin.sliders.index');
    });

    Route::get('/sliders/show', function () {
        return view('admin.sliders.show');
    });

    Route::get('/sliders/edit', function () {
        return view('admin.sliders.edit');
    });

    Route::get('/sliders/delete', function () {
        return view('admin.sliders.delete');
    });

    Route::get('/sliders/create', function () {
        return view('admin.sliders.create');
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    // users
    Route::get('/users', function () {
        return view('admin.users.index');
    });

    Route::get('/users/show', function () {
        return view('admin.users.show');
    });

    Route::get('/users/edit', function () {
        return view('admin.users.edit');
    });

    Route::get('/users/delete', function () {
        return view('admin.users.delete');
    });

    Route::get('/users/create', function () {
        return view('admin.users.create');
    });

});

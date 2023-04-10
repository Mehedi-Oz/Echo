<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

//BlogController
Route::get('/', [BlogController::class, 'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    //DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    //CategoryController
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/save-category', [CategoryController::class, 'saveCategory'])->name('save.category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage.category');
    Route::get('/update-category', [CategoryController::class, 'updateCategory'])->name('update.category');


});

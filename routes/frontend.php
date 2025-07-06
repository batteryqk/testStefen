<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'f.'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
});
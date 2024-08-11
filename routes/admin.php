<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/dashboard');
})->middleware(['auth','admin']);
Route::get('/post_page',[AdminController::class,'post_page'])->name('post_page');
Route::post('/post_store',[AdminController::class,'store'])->name('store');

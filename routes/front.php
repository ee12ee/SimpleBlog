<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyPostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front/home');
});
Route::resource('post', HomeController::class);
Route::get('myPosts', [MyPostController::class,'show'])->name('showPosts');
Route::get('myPosts/delete/{id}', [MyPostController::class,'destroy'])->name('deletePost');
Route::get('myPosts/edit/{id}', [MyPostController::class,'edit'])->name('editPost');
Route::post('myPosts/update/{id}', [MyPostController::class,'update'])->name('updatePost');

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'admin' , 'as'=>'admin.' , 'namespace'=>'Admin' , 'middleware'=>'auth:web'], function (){
    require_once base_path('routes/admin.php');
});
Route::group(['prefix'=>'home' , 'as'=>'home.'], function (){
    require_once base_path('routes/front.php');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

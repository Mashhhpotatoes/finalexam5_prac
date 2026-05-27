<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('studentmngt', [\App\Http\Controllers\StudentController::class, 'index'])->name('studentmngt.index');
    Route::get('studentmngt/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('studentmngt.create');
    Route::post('studentmngt', [\App\Http\Controllers\StudentController::class, 'store'])->name('studentmngt.store');

    Route::get('studentmngt/{id}/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('studentmngt.edit');
    Route::put('studentmngt/{id}/edit', [\App\Http\Controllers\StudentController::class, 'update'])->name('studentmngt.update');
    Route::get('studentmngt/{id}/delete', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('studentmngt.delete');
    
    
 

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

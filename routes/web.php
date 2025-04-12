<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// admin route

Route::get('/add/events', [AdminController::class, 'addeventform'])->middleware(['auth', 'verified'])->name('form');
Route::post('/add/events', [AdminController::class,'funeventform'])->middleware(['auth', 'verified'])->name('funform');


Route::get('/dashboard', [UserController::class, 'events'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/event/{id}/{title}', [UserController::class, 'event'])->middleware(['auth', 'verified'])->name('event');

Route::get('/join', [UserController::class, 'joinevent'])->middleware(['auth', 'verified']);
Route::get('/events/following', [UserController::class, 'eventsfollowing'])->middleware(['auth', 'verified'])->name('eventsfollowing');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

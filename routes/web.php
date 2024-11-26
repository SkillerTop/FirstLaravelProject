<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

Route::get('/user/{username}', [PageController::class, 'userProfile'])->name('userProfile');

Route::get('/redirect', RedirectController::class);

Route::get('/users', [UserController::class, 'getUsers'])->name('getUsers');

Route::post('/users', [UserController::class, 'createUser'])->name('createUser');

Route::put('/users/{id}', [UserController::class, 'updateUser'])->name('updateUser');

Route::delete('/users/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Store;

Route::view('/', 'index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Add this route for the store page
Route::get('/store', Store::class)
->name('store');

require __DIR__.'/auth.php';

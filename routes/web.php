<?php

use App\Livewire\Blogs\BlogsIndex;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::get('/blogs', BlogsIndex::class)->name('blogs.index');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/blogs', BlogsIndex::class)->name('blogs.index');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

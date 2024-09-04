<?php

use App\Livewire\Blogs;
use App\Livewire\Blogs\BlogsIndex;
use Illuminate\Support\Facades\Route;


Route::get('/', Blogs::class)->name('blogs');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/blogs/index', BlogsIndex::class)->name('blogs.index');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

<?php

use App\Livewire\Blogs;
use App\Livewire\BlogsSingle;
use App\Livewire\Blogs\BlogsIndex;
use App\Livewire\Blogs\BlogsView;
use App\Livewire\Blogs\BlogsCreate;
use App\Livewire\Blogs\BlogsEdit;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/blogs');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/blogs/{id}/single', BlogsSingle::class)->name('blogs-single');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/blogs/index', BlogsIndex::class)->name('blogs.index');
    Route::get('/blogs/{id}/view', BlogsView::class);
    Route::get('/blogs/create', BlogsCreate::class)->name('blogs.create');
    Route::get('/blogs/{id}/edit', BlogsEdit::class);
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

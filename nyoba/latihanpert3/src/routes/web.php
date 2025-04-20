<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Livewire\AboutPage;
use App\Livewire\Project;
use App\Livewire\Contact;
Use App\Livewire\Profile;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/project', Project::class)->name('projects');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/profile', Profile::class)->name('profile');


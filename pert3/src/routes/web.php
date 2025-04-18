<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Livewire\ProfilePage;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/profile', ProfilePage::class)->name('Profile');
Route::get('/about', ProfilePage::class)->name('About');

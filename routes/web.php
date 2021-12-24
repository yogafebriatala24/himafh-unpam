<?php

use App\Http\Livewire\Admin\KandidatLiveWire;
use App\Http\Livewire\Admin\RoomLiveWire;
use App\Http\Livewire\Admin\UserLiveWire;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('dashboard/users', UserLiveWire::class)->name('livewire-user')->middleware('auth');
Route::get('dashboard/rooms', RoomLiveWire::class)->name('livewire-room')->middleware('auth');
Route::get('dashboard/kandidats', KandidatLiveWire::class)->name('livewire-kandidat')->middleware('auth');

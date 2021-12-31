<?php

use App\Http\Controllers\Front\ProfileKandidatController;
use App\Http\Livewire\Admin\CalonLiveWire;
use App\Http\Livewire\Admin\DptController;
use App\Http\Livewire\Admin\KandidatLiveWire;
use App\Http\Livewire\Admin\RoomLiveWire;
use App\Http\Livewire\Admin\TambahKandidatLiveWire;
use App\Http\Livewire\Admin\UserLiveWire;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
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

Route::get('show', function () {
    $user = User::get();
    return response()->json([$user]);
});

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
Route::get('dashboard/calons', CalonLiveWire::class)->name('livewire-calon')->middleware('auth');
Route::get('dashboard/calons/tambah', TambahKandidatLiveWire::class)->name('livewire-calon-create')->middleware('auth');
Route::get('dashboard/dpt', DptController::class)->name('dpt-livewire');

// front
Route::get('profile-kandidat', [ProfileKandidatController::class, 'index']);

<?php

use App\Http\Controllers\Admin\PaslonController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\Front\ProfileKandidatController;
use App\Http\Livewire\Admin\CalonLiveWire;
use App\Http\Livewire\Admin\PaslonCreateLiveWire;
use App\Http\Livewire\Admin\PaslonLiveWire;
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
})->name('dashboard-admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('dashboard/users', UserLiveWire::class)->name('livewire-user')->middleware('auth');
Route::get('dashboard/rooms', RoomLiveWire::class)->name('livewire-room')->middleware('auth');
Route::get('dashboard/calons', CalonLiveWire::class)->name('livewire-calon')->middleware('auth');
Route::get('dashboard/calons/tambah', TambahKandidatLiveWire::class)->name('livewire-calon-create')->middleware('auth');
// Route::get('dashboard/calons/paslon', PaslonLiveWire::class)->name('livewire-paslon')->middleware('auth');
// Route::get('dashboard/calons/paslon/create', PaslonCreateLiveWire::class)->name('livewire-paslon-create')->middleware('auth');
Route::resource('dashboard/calons/paslon', PaslonController::class)->middleware('auth');

// front
Route::get('profile-kandidat', [ProfileKandidatController::class, 'index'])->name('profile');
Route::get('/', [DepanController::class, 'index'])->name('depan');

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

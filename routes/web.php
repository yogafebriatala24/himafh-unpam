<?php

use App\Http\Controllers\Admin\PaslonController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\Front\ProfileKandidatController;
use App\Http\Livewire\Admin\CalonLiveWire;
use App\Http\Livewire\Admin\DashboardLiveWire;
use App\Http\Livewire\Admin\PaslonCreateLiveWire;
use App\Http\Livewire\Admin\PaslonLiveWire;
use App\Http\Livewire\Admin\RoomLiveWire;
use App\Http\Livewire\Admin\TambahKandidatLiveWire;
use App\Http\Livewire\Admin\UserLiveWire;
use App\Http\Livewire\Front\FrontRoomLiveWire;
use App\Http\Livewire\Front\VotingLiveWire;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;

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

Route::get('/dashboard', DashboardLiveWire::class)->name('dashboard-admin')->middleware('auth', 'admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('dashboard/users', UserLiveWire::class)->name('livewire-user')->middleware('auth');
Route::get('dashboard/rooms', RoomLiveWire::class)->name('livewire-room')->middleware('auth');
Route::get('dashboard/calons', CalonLiveWire::class)->name('livewire-calon')->middleware('auth');
Route::get('dashboard/calons/tambah', TambahKandidatLiveWire::class)->name('livewire-calon-create')->middleware('auth');
Route::resource('dashboard/calons/paslon', PaslonController::class)->middleware('auth');

// front
Route::get('profile-kandidat/{id}', [ProfileKandidatController::class, 'index'])->name('profile');
Route::get('/', [DepanController::class, 'index'])->name('depan');

Route::get('room', FrontRoomLiveWire::class)->name('front-room')->middleware('auth');
Route::get('pilih', VotingLiveWire::class)->middleware('auth')->name('pilih');
Route::get('vote/{id}', [ProfileKandidatController::class, 'vote'])->name('vote')->middleware('auth');


Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');



// cek duplikat 
Route::get('duplikat', function () {
    $data = User::whereIn('username', function ($query) {
        $query->select('username')->from('users')->groupBy('username')->havingRaw('count(*) > 1');
    })->get();
    return response()->json($data);
});

Route::get('secret', function(){
    $user = User::with('suara')->get();

    return response()->json([$user]);
})->middleware('auth', 'admin');

Route::get('analisis', function(){
    $data = Analytics::fetchMostVisitedPages(Period::days(7));
    dd($data);
});
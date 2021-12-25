<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahKandidatLiveWire extends Component
{
    use WithFileUploads;

    public $userId, $image, $role;

    public function render()
    {
        $users = User::get();
        return view('livewire.admin.tambah-kandidat-live-wire', [
            'users' => $users
        ])->extends('layouts.admin')->section('content');
    }
}

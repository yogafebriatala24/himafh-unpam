<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahKandidatLiveWire extends Component
{
    use WithFileUploads;

    public $userId, $image, $role;
    public $isSearch = true, $search = '', $nama;

    public function render()
    {
        if ($this->search === $this->nama) {
            $this->isSearch = false;
        } else {
            $this->isSearch = true;
        }
        $users = User::where('name', 'LIKE', "%" . $this->search . "%")
            ->orWhere('email', 'LIKE', "%" . $this->search . "%")
            ->orWhere('nim', 'LIKE', "%" . $this->search . "%")->get();
        return view('livewire.admin.tambah-kandidat-live-wire', [
            'users' => $users
        ])->extends('layouts.admin')->section('content');
    }

    public function hendleSelect($id)
    {
        $this->userId = $id;

        $user = User::find($id);
        $this->nama = $user->name;
        $this->search = $user->name;

        $this->isSearch = false;
    }

    protected $rules = [
        'userId' => 'required',
        'role' => 'required',
        'image' => 'required|image|max:2024' //2mb
    ];

    protected $messages = [
        'role.required' => 'jabatan harus di isi',
        'image.required' => 'image harus di isi',
        'image.max' => 'image size max 2mb',
        'userId.required' => 'colom ini harus di isi'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        $this->validate();
        $image = $this->image->store('calon', 'public');

        $calon = Kandidat::create([
            'user_id' => $this->userId,
            'role' => $this->role,
            'image' => $image
        ]);
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Room;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RoomLiveWire extends Component
{
    use LivewireAlert;
    public $nama, $user_reguler, $status;
    public $isCreate = false;
    public function render()
    {
        $rooms = Room::get();
        return view('livewire.admin.room-live-wire', [
            'rooms' => $rooms
        ])->extends('layouts.admin')->section('content');
    }

    public function confirmCreate()
    {
        if ($this->isCreate) {
            $this->isCreate = false;
        } else {
            $this->isCreate = true;
        }
    }

    protected $rules = [
        'nama' => 'required|min:4',
        'user_reguler' => 'required',
        'status' => 'required',
    ];
    protected $messages = [
        'user_reguler.required' => 'reguler pemilih harus di isi',
        'nama.required' => 'nama room harus di isi',
        'status.required' => 'status room harus di isi'
    ];

    public function tambah()
    {
        $this->validate();
        $room = Room::create([
            'nama' => $this->nama,
            'user_reguler' => $this->user_reguler,
            'status' => $this->status,
        ]);
        $this->isCreate = false;
        $this->nama = '';
        $this->alert('success', 'Perubahan di simpan', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}

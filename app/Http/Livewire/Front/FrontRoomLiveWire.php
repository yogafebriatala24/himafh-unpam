<?php

namespace App\Http\Livewire\Front;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FrontRoomLiveWire extends Component
{
    public $rooms;

    public function render()
    {
        $user = Auth::user()->reguler;
        $this->rooms = Room::where('status', 'buka')->where('user_reguler', $user)->first();
        // dd($this->rooms);
        return view('livewire.front.front-room-live-wire', [
            'room' => $this->rooms
        ])->extends('layouts.front')->section('content');
    }
}

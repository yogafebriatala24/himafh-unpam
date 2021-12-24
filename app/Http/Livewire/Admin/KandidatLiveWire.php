<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use Livewire\Component;

class KandidatLiveWire extends Component
{
    public function render()
    {
        $kandidats = Kandidat::get();
        return view('livewire.admin.kandidat-live-wire')
            ->extends('layouts.admin')->section('content');
    }
}

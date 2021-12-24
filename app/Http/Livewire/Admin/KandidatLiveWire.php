<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use App\Models\Paslon;
use Livewire\Component;

class KandidatLiveWire extends Component
{
    public function render()
    {
        $paslon = Paslon::with('kandidat.user')->get();
        // dd($paslon);
        $kandidats = Kandidat::get();

        return view('livewire.admin.kandidat-live-wire', [
            'kandidats' => $kandidats,
            'paslons' => $paslon
        ])
            ->extends('layouts.admin')->section('content');
    }
}

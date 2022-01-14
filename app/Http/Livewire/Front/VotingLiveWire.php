<?php

namespace App\Http\Livewire\Front;

use App\Models\Paslon;
use App\Models\Suara;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VotingLiveWire extends Component
{
    public $paslonId, $sudahMilih = false;
    public function render()
    {
        $cekSuara = Suara::where('user_id', Auth::user()->id)->first();
        if($cekSuara){
            $this->sudahMilih = true;
        }
        $user = Paslon::with('ketua.user', 'wakil.user')->get();

        return view('livewire.front.voting-live-wire', [
            'paslons' => $user
        ])->extends('layouts.front')->section('content');
    }

    public function vote($id){
        $userId = Auth::user()->id;
        $this->paslonId = $id;
        dd($userId);

        Suara::create([
            'user_id' => $userId,
            'paslon_id' => $this->paslonId
        ]);
    }
}

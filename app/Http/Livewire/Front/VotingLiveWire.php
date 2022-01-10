<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class VotingLiveWire extends Component
{
    public function render()
    {
        $user = User::get();

        return view('livewire.front.voting-live-wire');
    }
}

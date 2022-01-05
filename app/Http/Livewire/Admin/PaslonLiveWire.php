<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use App\Models\Paslon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PaslonLiveWire extends Component
{
    use LivewireAlert;
    public $paslon;
    public $cekVisiMisi, $cekId = 0;

    public function render()
    {
        $this->paslon = Paslon::with('kandidat.user')->get();
        // dd($this->paslon);
        return view('livewire.admin.paslon-live-wire', [
            'paslons' => $this->paslon,
        ]);
    }

    public function cek($id)
    {
        if ($id === $this->cekId) {
            $this->cekId = 0;
        } else {
            $this->cekId = $id;
        }
    }
}

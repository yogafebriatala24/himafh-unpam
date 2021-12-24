<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use App\Models\Paslon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class KandidatLiveWire extends Component
{
    use LivewireAlert;

    public $paslonId;
    public function render()
    {
        $paslon = Paslon::with('kandidat.user')->get();
        $kandidats = Kandidat::get();

        return view('livewire.admin.kandidat-live-wire', [
            'kandidats' => $kandidats,
            'paslons' => $paslon
        ])
            ->extends('layouts.admin')->section('content');
    }

    public function hapus($id)
    {
        $this->paslonId = $id;
        $this->alert('warning', 'Yakin hapus data ?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yakin',
            'onConfirmed' => 'confirmHapus',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onCancel' => 'confirmCancel',
            'timer' => null,
            'position' => 'center',
            'toast' => false,
        ]);
    }
    protected $listeners = [
        'confirmHapus',
    ];

    public function confirmHapus()
    {
        $paslon = Paslon::find($this->paslonId);
        $kandidats = Kandidat::where('paslon_id', $paslon->id)->update([
            'paslon_id' => null
        ]);
        $paslon->delete();

        $this->alert('success', 'Berhasil hapus data', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}

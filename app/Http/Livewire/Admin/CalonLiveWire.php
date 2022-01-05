<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CalonLiveWire extends Component
{
    use LivewireAlert;
    public $kandidatId;
    public $kandidat;

    // protected $listeners = ['newCalon'];
    protected $listeners = [
        'confirmHapus', 'newCalon'
    ];
    public function newCalon()
    {
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

    public function render()
    {
        $this->kandidat = Kandidat::with('user')->get();

        return view('livewire.admin.calon-live-wire', [
            'kandidats' => $this->kandidat
        ])->extends('layouts.admin')->section('content');
    }

    public function hapus($id)
    {
        $this->kandidatId = $id;
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


    public function confirmHapus($data)
    {
        $user = Kandidat::find($this->kandidatId);
        $user->delete();
        $this->alert('success', 'Berhasil hapus data', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}

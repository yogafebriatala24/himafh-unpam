<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use App\Models\Paslon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class PaslonCreateLiveWire extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $nomor, $idKetua, $idWakil, $visi, $misi, $frame_ytb, $foto;
    public function render()
    {
        $kandidatKetuas = Kandidat::where('role', 'Ketua')->with('user')->get();
        $kandidatWakils = Kandidat::where('role', 'Wakil')->with('user')->get();
        return view('livewire.admin.paslon-create-live-wire', [
            'ketuas' => $kandidatKetuas,
            'wakils' => $kandidatWakils
        ])->extends('layouts.admin')->section('content');
    }

    public function create()
    {
        $validasi = $this->validate([
            'nomor' => 'numeric|required',
            'idKetua' => 'numeric|required',
            'idWakil' => 'numeric|required',
            'visi' => 'required|string',
            'misi' => 'required|string'
        ]);

        $cekKetua = Kandidat::where('id', $this->idKetua)->first();
        if ($cekKetua->paslon_id !== null) {
            return
                $this->alert('warning', 'Gagal', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'showConfirmButton' => true,
                    'onConfirmed' => '',
                    'confirmButtonText' => 'OK',
                    'text' => 'Calon Ketua Sudah Memilik Nomor dan Pasangan',
                ]);
        }

        $cekWakil = Kandidat::where('id', $this->idWakil)->first();
        if ($cekWakil->paslon_id !== null) {
            return
                $this->alert('warning', 'Gagal', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'showConfirmButton' => true,
                    'onConfirmed' => '',
                    'confirmButtonText' => 'OK',
                    'text' => 'Calon Wakil Sudah Memilik Nomor dan Pasangan',
                ]);
        }

        $paslon = Paslon::create([
            'nomor' => $this->nomor,
            'visi' => $this->visi,
            'misi' => $this->misi,
        ]);

        $cekKetua->update([
            'paslon_id' => $paslon->id
        ]);
        $cekWakil->update([
            'paslon_id' => $paslon->id
        ]);

        session()->flash('message', 'Post successfully updated.');

        return redirect()->to('/dashboard/calons/paslon');
    }
}

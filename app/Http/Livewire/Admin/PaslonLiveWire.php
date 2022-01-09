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
    public $hapusId = 0;

    public function render()
    {
        $this->paslon = Paslon::with('ketua.user', 'wakil.user')->get();

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
    public function hapus($id)
    {
        $this->hapusId = $id;
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
        $paslon = Paslon::find($this->hapusId);
        $paslon->delete();

        $wakil = Kandidat::where('paslon_id', $paslon)->where('role', 'Wakil')->first();
        $ketua = Kandidat::where('paslon_id', $paslon)->where('role', 'Ketua')->first();

        $wakil->paslon_id = 0;
        $ketua->paslon_id = 0;

        $wakil->save();
        $ketua->save();

        $this->alert('success', 'Berhasil hapus data', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}

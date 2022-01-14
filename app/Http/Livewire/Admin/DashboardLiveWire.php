<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kandidat;
use App\Models\Paslon;
use App\Models\Suara;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardLiveWire extends Component
{
    public $suaraTerpakai, $sisaSuara, $dpt, $paslon, $calon;
    public $perhitunganSuara;

    public function render()
    {
        $this->dpt = User::where('roles', 'user')->count();

        $this->paslon = Paslon::count();
        $this->calon = Kandidat::count();

        $this->perhitunganSuara = Paslon::withCount('suara')->get();

        // dd($this->perhitunganSuara->toJson());
        $this->suaraTerpakai = Suara::count();
        $this->sisaSuara = $this->dpt - $this->suaraTerpakai;
        // dd($this->suaraTerpakai);
        

        return view('livewire.admin.dashboard-live-wire', [
            'jmlDpt' => $this->dpt,
            'jmlPaslon' => $this->paslon,
            'jmlCalon' => $this->calon,
            'suaraTerpakai' => $this->suaraTerpakai,
            'sisaSuara' => $this->sisaSuara,
            'perhitungan' => $this->perhitunganSuara
        ])
            ->extends('layouts.admin')
            ->section('content');
    }
}

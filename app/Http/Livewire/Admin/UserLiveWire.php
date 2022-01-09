<?php

namespace App\Http\Livewire\Admin;

use App\Imports\UsersImport;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class UserLiveWire extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    use WithPagination;


    protected $paginationTheme = 'bootstrap';

    public $name, $email, $nim, $reg, $password;
    public $limit = 10, $countUser;
    public $keyword, $filterReg, $jmlData = 8;
    public $click, $userId = 0;
    public $fileExcel, $iteration;

    public function mount()
    {
        $this->countUser = User::count();
        if ($this->limit >= $this->countUser) {
            $this->maxLimit = true;
        }
    }

    public function render()
    {

        if (strlen($this->keyword) >= 2) {
            $users = User::where('name', 'LIKE', "%" . $this->keyword . "%")
                ->orWhere('email', 'LIKE', "%" . $this->keyword . "%")
                ->orWhere('username', 'LIKE', "%" . $this->keyword . "%")->paginate($this->jmlData);
        } elseif ($this->filterReg) {
            $users = User::orderBy('id', 'asc')->where('reguler', $this->filterReg)->paginate($this->jmlData);
        } else {
            $users = User::orderBy('id', 'asc')->paginate($this->jmlData);
        }

        return view('livewire.admin.user-live-wire', [
            'users' => $users
        ])->extends('layouts.admin')->section('content');
    }
    public function limitAdd()
    {
        $this->limit += 5;
        if ($this->limit >= $this->countUser) {
            $this->maxLimit = true;
        }
    }

    public function doubleClick($id)
    {
        // dd("OK");
        if ($this->userId === $id) {
            $this->click += 1;
            $this->userId = $id;
        } else {
            $this->click = 0;
            $this->click += 1;
            $this->userId = $id;
        }

        if ($id > 0) {
            $user = User::find($id);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->nim = $user->username;
            $this->reg = $user->reguler;
            $this->password = Crypt::decryptString($user->passwordtwo);
        } else {
            $this->click = 0;
        }
    }

    public function update()
    {
        $user = User::find($this->userId);

        $user->update([
            'name' => $this->name,
            'username' => $this->nim,
            'reguler' => $this->reg,
        ]);

        $this->click = 0;

        $this->alert('success', 'Perubahan di simpan', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function hapus($id)
    {
        $this->userId = $id;
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

    public function confirmHapus($data)
    {
        $user = User::find($this->userId);
        $user->delete();
        $this->alert('success', 'Berhasil hapus data', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }


    public function hendleImportExcel()
    {
        $this->validate([
            'fileExcel' => 'required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new UsersImport, $this->fileExcel);
        $this->fileExcel = null;
        $this->iteration++;
        $this->alert('success', 'Berhasil import excel ke database', [
            'position' => 'top',
            'timer' => 4000,
            'toast' => true,
        ]);
    }

    public function generatePassword()
    {

        $user = User::where('password', null)->get();
        if ($user->count() !== 0) {
            foreach ($user as $s) {
                $random = Str::random(8);
                $s->update([
                    'password' => Hash::make($random),
                    'passwordtwo' => Crypt::encryptString($random)
                ]);
            }

            $this->alert('success', 'Berhasil generate password baru', [
                'position' => 'top',
                'timer' => 4000,
                'toast' => true,
            ]);
        } else {
            $this->alert('warning', 'Tidak ada password kosong', [
                'position' => 'top',
                'timer' => 4000,
                'toast' => true,
            ]);
        }
    }
}

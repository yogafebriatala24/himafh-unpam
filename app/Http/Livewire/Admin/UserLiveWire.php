<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserLiveWire extends Component
{
    public $name, $email, $nim, $reg;
    public $limit = 10, $countUser, $maxLimit = false;
    public $keyword;
    public $click, $userId = 0;

    public function mount()
    {
        $this->countUser = User::count();
        if ($this->limit >= $this->countUser) {
            $this->maxLimit = true;
        }
    }

    public function render()
    {

        if ($this->keyword !== null) {
            $users = User::where('name', 'LIKE', "%" . $this->keyword . "%")
                ->orWhere('email', 'LIKE', "%" . $this->keyword . "%")
                ->orWhere('nim', 'LIKE', "%" . $this->keyword . "%")->get();
            $this->maxLimit = true;
        } else {
            $users = User::orderBy('id', 'asc')->limit($this->limit)->get();
            $this->maxLimit = false;
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
            $this->nim = $user->nim;
            $this->reg = $user->reguler;
        } else {
            $this->click = 0;
        }
    }

    public function update()
    {
        $user = User::find($this->userId);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'nim' => $this->nim,
            'reguler' => $this->reg,
        ]);

        $this->click = 0;
    }
}

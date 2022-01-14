<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Paslon;
use App\Models\Suara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileKandidatController extends Controller
{
    public function index($id)
    {
        $kandidat = Paslon::with('ketua.user', 'wakil.user')->find($id);

        return view('front.profilekandidat', [
            'paslon' => $kandidat
        ]);
    }

    public function vote($id){
        $userId = Auth::user()->id;
        $this->paslonId = $id;
        // dd($userId);

        Suara::create([
            'user_id' => $userId,
            'paslon_id' => $this->paslonId
        ]);

        return redirect()->back();
    }
}

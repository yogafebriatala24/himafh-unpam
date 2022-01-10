<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function index()
    {
        $paslon = Paslon::with('ketua.user', 'wakil.user')->get();

        return view('index', [
            'paslon' => $paslon
        ]);
    }
}

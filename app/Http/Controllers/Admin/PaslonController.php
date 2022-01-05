<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaslonRequest;
use App\Models\Kandidat;
use App\Models\Paslon;
use Illuminate\Http\Request;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paslon = Paslon::with('kandidat.user')->get();
        // return response()->json([$paslon]);
        return view('pages.admin.paslon.index', [
            'paslons' => $paslon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ketua = Kandidat::with('user')->where('role', 'Ketua')->get();
        $wakil = Kandidat::with('user')->where('role', 'Wakil')->get();

        return view('pages.admin.paslon.create', [
            'ketuas' => $ketua,
            'wakils' => $wakil
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaslonRequest $request)
    {
        $data = $request->all();

        $cekKetua =  Kandidat::where('id', $request->ketua_id)->first();
        if ($cekKetua->paslon_id !== null) {
            return redirect()->route('paslon.create')->with('status', 'Calon ketua sudah memiliki pasangan calon');
        }

        $cekWakil =  Kandidat::where('id', $request->wakil_id)->first();
        if ($cekWakil->paslon_id !== null) {
            return redirect()->route('paslon.create')->with('status', 'Calon Wakil sudah memiliki pasangan calon');
        }

        $paslon = Paslon::create($data);

        $cekKetua->paslon_id = $paslon->id;
        $cekWakil->paslon_id = $paslon->id;
        $cekKetua->save();
        $cekWakil->save();

        return redirect()->route('paslon.index')->with('status', 'berhasil tambah pasangan calon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

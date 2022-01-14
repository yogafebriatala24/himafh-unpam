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

        return view('pages.admin.paslon.index');
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
        $image = $request->file('foto')->store('image/paslon/', 'public');
        $data['foto'] = $image;

        $paslon = Paslon::create($data);

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
        $data = Paslon::find($id);

        $ketua = Kandidat::with('user')->where('role', 'Ketua')->get();
        $wakil = Kandidat::with('user')->where('role', 'Wakil')->get();

        return view('pages.admin.paslon.edit', [
            'ketuas' => $ketua,
            'wakils' => $wakil,
            'data' => $data
        ]);
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

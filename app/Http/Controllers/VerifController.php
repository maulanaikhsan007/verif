<?php

namespace App\Http\Controllers;

use App\Models\Verif;
use Illuminate\Http\Request;

class VerifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $verif = Verif::all();
        // return view('verif.prabowo', compact('verif'));
        $verif = Verif::all();
        return view('verif.prabowo', compact('verif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rizky()
    {
        return view('verif.rizky');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verif = new Verif();
        $verif->id = $request->input('id');
        $verif->nama = $request->input('nama');
        $verif->npm = $request->input('npm');
        $verif->jurusan = $request->input('jurusan');
        $verif->save();

        return redirect('/verif')->with(['success' => 'Data Berhasil Tersimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verif  $verif
     * @return \Illuminate\Http\Response
     */
    public function show(Verif $verif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verif  $verif
     * @return \Illuminate\Http\Response
     */
    public function edit(Verif $request, $id)
    {
        $verif = Verif::where('id',$id)->first();
        return view('verif.edit', compact('verif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verif  $verif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $verif = Verif::find($id);
        $verif->nama = $request->input('nama');
        $verif->npm = $request->input('npm');
        $verif->jurusan = $request->input('jurusan');
        $verif->update();

        return redirect('/verif')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verif  $verif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verif = Verif::find($id);
        $verif-> delete();

        return redirect('/verif')->with(['success' => 'Data Berhasil Dihapus']);
    }
}

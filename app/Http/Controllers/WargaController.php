<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::all();
        return view('rw.rw', ['warga' => $warga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('form/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|digits:16',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        // Warga::create($request->all());
        $warga = new Warga;
        $warga->nik = $request->nik;
        $warga->kk = $request->kk;
        $warga->nama = $request->nama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->kontak = $request->kontak;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->save();
        $warga1 = Warga::all();
        return redirect()->route('warga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        $warga1 = Warga::where('id', $warga);
        return $warga1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga)
    {
        return view('update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warga $warga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        $warga->delete();
        $warga2 = Warga::all();
        return view('table', ['warga' => $warga2]);
    }

    public function storeGuest(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|digits:16',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        // Warga::create($request->all());
        $warga = new Warga;
        $warga->nik = $request->nik;
        $warga->kk = $request->kk;
        $warga->nama = $request->nama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->kontak = $request->kontak;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->save();
        return view('form/formguest');
    }
}

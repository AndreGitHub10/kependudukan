<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

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
        return view('table', compact('warga'))->with('i', (request()->input('page', 1) - 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $warga = new Warga;
        return view('form/form', ['warga' => $warga]);
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
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'tempat_lahir.required' => 'Tempat lahir harus diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
        ]);
        // Warga::create($request->all());
        $warga = new Warga;
        // $warga->nik = $request->nik;
        // $warga->kk = $request->kk;
        $warga->nama = $request->nama;
        $warga->alamat = $request->alamat;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->kontak = $request->kontak;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->save();
        $warga1 = Warga::all();
        return redirect()->route('warga.index');
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
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('form.form', compact('warga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'tempat_lahir.required' => 'Tempat lahir harus diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
        ]);
        $wargaUpdate = Warga::find($id);
        $wargaUpdate->nama = $request->nama;
        $wargaUpdate->alamat = $request->alamat;
        $wargaUpdate->tempat_lahir = $request->tempat_lahir;
        $wargaUpdate->tanggal_lahir = $request->tanggal_lahir;
        $wargaUpdate->kontak = $request->kontak;
        $wargaUpdate->rt = $request->rt;
        $wargaUpdate->rw = $request->rw;
        $wargaUpdate->save();
        return redirect()->route('rt.index');
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
        return redirect()->route('warga.index');
    }

    public function storeGuest(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'tempat_lahir.required' => 'Tempat lahir harus diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
        ]);
        // Warga::create($request->all());
        $warga = new Warga;
        $warga->nama = $request->nama;
        $warga->alamat = $request->alamat;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->kontak = $request->kontak;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->save();
        if ($warga->exists) {
            return redirect()->route('welcome')->with(['success' => 'Data '. $warga->nama .' berhasil ditambahkan']);
        } else {
            return redirect()->route('welcome')->with(['danger' => 'Data '. $warga->nama .' gagal ditambahkan']);
        }
        // return view('form/formguest');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Illuminate\Support\Facades\DB;
use Validator;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $warga = Warga::all()->where('rt', $user->rt)->where('rw', $user->rw);
        return view('rt.rt', compact('warga'))->with('i', (request()->input('page', 1) - 1));
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
        $warga->nama = $request->nama;
        $warga->alamat = $request->alamat;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->kontak = $request->kontak;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->save();
        $warga1 = Warga::all();
        return redirect()->route('rt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        $warga1 = Warga::find($warga);
        return $warga1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect()->route('rt.index');
    }
}

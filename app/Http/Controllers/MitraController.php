<?php

namespace App\Http\Controllers;

use App\Mitra;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = Mitra::all();
        return view('mitra.index', ['mitra' => $mitra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.create');
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
            'logo' => 'required',
            'nama' => 'required',
            'tahun_berdiri' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'jadwal' => 'required',
            'materi' => 'required',
            'perlengkapan_peserta' => 'required',
            'fasilitas' => 'required',
            'keuntungan' => 'required',
            'sertifikat' => 'required',
        ]);
        $logoname = 'logo'.'-'.$request->nama.'.'.$request->logo->extension();
        $request->logo->move(public_path('logo'), $logoname);
        Mitra::create([
            'logo' => $logoname,
            'nama' => $request['nama'],
            'slug' => Str::slug($request['nama']),
            'tahun_berdiri' => $request['tahun_berdiri'],
            'deskripsi' => $request['deskripsi'],
            'lokasi' => $request['lokasi'],
            'jadwal' => $request['jadwal'],
            'materi' => $request['materi'],
            'perlengkapan_peserta' => $request['perlengkapan_peserta'],
            'fasilitas' => $request['fasilitas'],
            'keuntungan' => $request['keuntungan'],
            'sertifikat' => $request['sertifikat'],
            'inputer' => Auth::user()->name,
        ]);
        return redirect()->route('daftar-mitra.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mitra = Mitra::find($id);
        return view('mitra.show',compact('mitra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mitra = Mitra::find($id);
        return view('mitra.edit',compact('mitra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tahun_berdiri' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'jadwal' => 'required',
            'materi' => 'required',
            'perlengkapan_peserta' => 'required',
            'fasilitas' => 'required',
            'keuntungan' => 'required',
            'sertifikat' => 'required',
        ]);
        $mitra = Mitra::find($id);

        if (!empty($request->logo)) {
            $logoname = 'logo'.'-'.$request->nama.'.'.$request->logo->extension();
            $request->logo->move(public_path('logo'), $logoname);

            $mitra->logo = $logoname;
        }
        $mitra->nama = $request['nama'];
        $mitra->slug = Str::slug($request['nama']);
        $mitra->tahun_berdiri = $request['tahun_berdiri'];
        $mitra->deskripsi = $request['deskripsi'];
        $mitra->lokasi = $request['lokasi'];
        $mitra->jadwal = $request['jadwal'];
        $mitra->materi = $request['materi'];
        $mitra->perlengkapan_peserta = $request['perlengkapan_peserta'];
        $mitra->fasilitas = $request['fasilitas'];
        $mitra->keuntungan = $request['keuntungan'];
        $mitra->sertifikat = $request['sertifikat'];
        $mitra->inputer = Auth::user()->name;

        $mitra->save();
        return redirect()->route('daftar-mitra.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitra = Mitra::find($id);
        $mitra->delete();
        unlink(public_path().'/logo/'.$mitra->logo);
        return redirect()->route('daftar-mitra.index')->with('success','Mitra berhasil dihapus');
    }
}

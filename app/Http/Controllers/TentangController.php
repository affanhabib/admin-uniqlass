<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentang $tentang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tentang $tentang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentang $tentang)
    {
        //
    }

    public function edit_tentang()
    {
        $id = '1';
        $tentang = Tentang::find($id);
        return view('tentang.deskripsi-visi-misi.index', compact('tentang'));
    }

    public function update_tentang(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $id = '1';
        $tentang = Tentang::find($id);
        $tentang->deskripsi = $request['deskripsi'];
        $tentang->visi = $request['visi'];
        $tentang->misi = $request['misi'];

        $tentang->save();
        return redirect()->back()->with('success','Data berhasil di update');
    }
}

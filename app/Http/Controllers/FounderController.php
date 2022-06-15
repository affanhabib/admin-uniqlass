<?php

namespace App\Http\Controllers;

use App\Founder;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $founder = Founder::all();
        return view('tentang.founder.index', ['founder' => $founder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentang.founder.create');
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
            'jabatan' => 'required',
            'foto' => 'required',
        ]);
        $foto = 'founder'.'-'.$request->nama.'.'.$request->foto->extension();
        $request->foto->move(public_path('founder'), $foto);
        Founder::create([
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'foto' => $foto,
        ]);
        return redirect()->route('founder.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function show(Founder $founder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $founder = Founder::find($id);
        return view('tentang.founder.edit',compact('founder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);
        $founder = Founder::find($id);

        if (!empty($request->foto)) {
            $foto = 'founder'.'-'.$request->nama.'.'.$request->foto->extension();
            $request->foto->move(public_path('founder'), $foto);

            $founder->foto = $foto;
        }
        $founder->nama = $request['nama'];
        $founder->jabatan = $request['jabatan'];

        $founder->save();
        return redirect()->route('founder.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $founder = Founder::find($id);
        $founder->delete();
        unlink(public_path().'/founder/'.$founder->foto);
        return redirect()->route('founder.index')->with('success','Data Founder berhasil dihapus');
    }
}

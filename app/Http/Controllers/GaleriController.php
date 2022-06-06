<?php

namespace App\Http\Controllers;

use App\Mitra;
use App\Galeri;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = Mitra::all();
        return view('galeri.index', ['mitra' => $mitra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mitra = Mitra::all();
        return view('galeri.create', compact('mitra'));
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
            'mitra_id' => 'required',
            'photo' => 'required',
        ]);
        $galeriname = 'galeri-mitra_'.$request->mitra_id.'-'.pathinfo($request->photo->getClientOriginalName(), PATHINFO_FILENAME).'.'.$request->photo->extension();
        $request->photo->move(public_path('photo'), $galeriname);
        Galeri::create([
            'mitra_id' => $request['mitra_id'],
            'photo' => $galeriname,
        ]);
        return redirect()->route('galeri.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['mitra'] = Mitra::find($id);
        $data['galeri'] = DB::table('galeris')->where('mitra_id', $id)->get();
        return view('galeri.show',['data' => $data]);
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
        $galeri = Galeri::find($id);
        $galeri->delete();
        unlink(public_path().'/photo/'.$galeri->photo);
        return redirect()->route('galeri.index')->with('success','Photo berhasil dihapus');
    }
}

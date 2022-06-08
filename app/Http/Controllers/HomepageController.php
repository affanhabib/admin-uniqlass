<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
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
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Homepage $homepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homepage $homepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homepage $homepage)
    {
        //
    }

    public function edit_header()
    {
        $id = '1';
        $header = Homepage::find($id);
        return view('homepage.header.index', compact('header'));
    }

    public function update_header(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'caption' => 'required',
            'tombol' => 'required',
            'link' => 'required',
        ]);
        $id = '1';
        $header = Homepage::find($id);
        $header->judul = $request['judul'];
        $header->caption = $request['caption'];
        $header->tombol = $request['tombol'];
        $header->link = $request['link'];

        $header->save();
        return redirect()->back()->with('success','Data berhasil di update');
    }

    public function edit_deskripsi()
    {
        $id = '1';
        $deskripsi = Homepage::find($id);
        return view('homepage.deskripsi.index', compact('deskripsi'));
    }

    public function update_deskripsi(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
        ]);
        $id = '1';
        $deskripsi = Homepage::find($id);
        $deskripsi->deskripsi = $request['deskripsi'];

        $deskripsi->save();
        return redirect()->back()->with('success','Data berhasil di update');
    }

    public function edit_ig()
    {
        $id = '1';
        $ig = Homepage::find($id);
        return view('homepage.instagram.index', compact('ig'));
    }

    public function update_ig(Request $request)
    {
        $request->validate([
            'ig1' => 'required',
            'ig2' => 'required',
            'ig3' => 'required',
        ]);
        $id = '1';
        $ig = Homepage::find($id);
        $ig->ig1 = $request['ig1'];
        $ig->ig2 = $request['ig2'];
        $ig->ig3 = $request['ig3'];

        $ig->save();
        return redirect()->back()->with('success','Data berhasil di update');
    }

    public function edit_yt()
    {
        $id = '1';
        $yt = Homepage::find($id);
        return view('homepage.youtube.index', compact('yt'));
    }

    public function update_yt(Request $request)
    {
        $request->validate([
            'yt1' => 'required',
            'yt2' => 'required',
            'yt3' => 'required',
        ]);
        $id = '1';
        $yt = Homepage::find($id);
        $yt->yt1 = $request['yt1'];
        $yt->yt2 = $request['yt2'];
        $yt->yt3 = $request['yt3'];

        $yt->save();
        return redirect()->back()->with('success','Data berhasil di update');
    }
}

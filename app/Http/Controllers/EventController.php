<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('event.index', ['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'poster' => 'required',
            'program' => 'required',
            'judul_event' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'waktu' => 'required',
            'narasumber' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'show_carousel' => 'required',
        ]);
        $postername = 'poster'.'-'.$request->judul_event.'.'.$request->poster->extension();
        $request->poster->move(public_path('poster'), $postername);
        Event::create([
            'poster' => $postername,
            'program' => $request['program'],
            'subprogram' => $request['subprogram'],
            'judul_event' => $request['judul_event'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_berakhir' => $request['tanggal_berakhir'],
            'waktu' => $request['waktu'],
            'narasumber' => $request['narasumber'],
            'lokasi' => $request['lokasi'],
            'deskripsi' => $request['deskripsi'],
            'link' => $request['link'],
            'show_carousel' => $request['show_carousel'],
            'inputer' => Auth::user()->name,
        ]);
        return redirect()->route('daftar-event.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'program' => 'required',
            'judul_event' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'waktu' => 'required',
            'narasumber' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'show_carousel' => 'required',
        ]);
        $event = Event::find($id);

        if (!empty($request->poster)){
            $postername = 'poster'.'-'.$request->judul_event.'.'.$request->poster->extension();
            $request->poster->move(public_path('poster'), $postername);

            $event->poster = $postername;
        }
        $event->program = $request['program'];
        $event->subprogram = $request['subprogram'];
        $event->judul_event = $request['judul_event'];
        $event->tanggal_mulai = $request['tanggal_mulai'];
        $event->tanggal_berakhir = $request['tanggal_berakhir'];
        $event->waktu = $request['waktu'];
        $event->narasumber = $request['narasumber'];
        $event->lokasi = $request['lokasi'];
        $event->deskripsi = $request['deskripsi'];
        $event->link = $request['link'];
        $event->show_carousel = $request['show_carousel'];
        $event->inputer = Auth::user()->name;

        $event->save();
        return redirect()->route('daftar-event.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        unlink(public_path().'/poster/'.$event->poster);
        return redirect()->route('daftar-event.index')->with('success','Event berhasil dihapus');
    }
}

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Detail Event</h3>
        </div>
        <div class="row">
            <h1>{{ $event->judul_event }}</h1>
            <div class="col-md-6">
                <div class="row text-secondary">
                    <p>{{ $event->program }} {{ $event->subprogram }}</p>
                </div>
                <div class="row">
                    {!! $event->deskripsi !!}
                </div>
                <div class="row">
                    <p class="fw-bold">Lokasi Event</p>
                    <p>{{ $event->lokasi }}</p>
                </div>
                <div class="row">
                    <p class="fw-bold">Jadwal Event</p>
                    @if ($event->tanggal_mulai != $event->tanggal_berakhir)
                    <p>{{ date('l, d F Y', strtotime($event->tanggal_mulai)) }} - {{ date('l, d F Y', strtotime($event->tanggal_berakhir))}}</p>
                    @else
                    <p>{{ date('l, d F Y', strtotime($event->tanggal_mulai)) }}</p>
                    @endif
                </div>
                <div class="row">
                    <p class="fw-bold">Pukul</p>
                    <p>{{ date('h:i', strtotime($event->waktu)) }} - Selesai WIB</p>
                </div>
                <div class="row">
                    <p class="fw-bold">Narasumber</p>
                    <div>{!! $event->narasumber !!}</div>
                </div>
                <div class="row mb-5">
                    <p class="fw-bold">Link Pendaftaran</p>
                    <a href="{{ $event->link }}">{{ $event->link }}</a>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="d-flex justify-content-center sticky-top">
                    <img class="logo mt-5" src="{{ asset('poster/') }}/{{$event->poster}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('daftar-event.destroy', $event->id) }}" method="POST">
                <a href="{{ route('daftar-event.index') }}" class="btn btn-secondary"><i class="fa fa-ban"></i> Cancel</a>
                <a href="{{ route('daftar-event.edit',$event->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type='submit'><i class="fa fa-trash"></i> Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection

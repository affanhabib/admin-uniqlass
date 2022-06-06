@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Detail Mitra</h3>
        </div>
        <div class="row">
            <h1>{{ $mitra->nama }}</h1>
            <div class="col-md-6">
                <div class="row text-secondary">
                    <p>Berdiri Sejak {{ $mitra->tahun_berdiri }}</p>
                </div>
                <div class="row">
                    {!! $mitra->deskripsi !!}
                </div>
                <div class="row">
                    <p class="fw-bold">Lokasi Kursus</p>
                    <p>{{ $mitra->lokasi }}</p>
                </div>
                <div class="row">
                    <p class="fw-bold">Jadwal Kursus</p>
                    <div>{!! $mitra->jadwal !!}</div>
                </div>
                <div class="row">
                    <p class="fw-bold">Materi Kursus</p>
                    <div>{!! $mitra->materi !!}</div>
                </div>
                <div class="row">
                    <p class="fw-bold">Perlengkapan Peserta Kursus</p>
                    <div>{!! $mitra->perlengkapan_peserta !!}</div>
                </div>
                <div class="row">
                    <p class="fw-bold">Fasilitas Kursus</p>
                    <div>{!! $mitra->fasilitas !!}</div>
                </div>
                <div class="row">
                    <p class="fw-bold">Benefit Kursus</p>
                    <div>{!! $mitra->keuntungan !!}</div>
                </div>
                <div class="row">
                    <p class="fw-bold">Sertifikat</p>
                    <div>{!! $mitra->sertifikat !!}</div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="d-flex justify-content-center sticky-top">
                    <img class="logo mt-5" src="{{ asset('logo/') }}/{{$mitra->logo}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('daftar-mitra.destroy', $mitra->id) }}" method="POST">
                <a href="{{ route('daftar-mitra.index') }}" class="btn btn-secondary"><i class="fa fa-ban"></i> Cancel</a>
                <a href="{{ route('daftar-mitra.edit',$mitra->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type='submit'><i class="fa fa-trash"></i> Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection

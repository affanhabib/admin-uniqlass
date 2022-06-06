@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col">
                <h3 class="title">Galeri Mitra</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('galeri.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Foto Mitra</a>
            </div>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @foreach ($mitra as $mtr)
            <div class="card mt-4" style="cursor: pointer;" onclick="window.location='{{ route('galeri.show',$mtr->id) }}';">
                <div class="card-body">
                    <h5 class="card-title">{{ $mtr->nama }}</h5>
                    <p class="card-text">Foto-foto promosi dari Mitra Uniqlass, <span class="fw-bold">{{ $mtr->nama }}</span></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

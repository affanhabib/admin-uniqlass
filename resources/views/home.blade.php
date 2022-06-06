@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h4 class="mb-3 title">Selamat Datang, {{ Auth::user()->name }}</h4>
    <hr style="background-color: grey">
    @if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'owner')
    <div class="col">
        <div class="card">
            <div class="card-header fw-bold">
                Fitur Khusus Founder
            </div>
            <div class="card-body">
                <h5 class="card-title">Daftar Admin</h5>
                <p class="card-text">Kelola siapa saja yang berhak mengelola konten yang ada di website Uniqlass. Bisa akses juga melalui menu "Admin" pada sidebar di samping</p>
                <a href="{{ route('daftar-admin.index') }}" class="btn btn-success">Lets Go</a>
            </div>
        </div>
    </div>
    @endif
    <div class="col mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mitra Kita</h5>
                <p class="card-text">Tambah, edit, dan lihat detail dari Mitra Uniqlass. Juga bisa diakses dengan menu "Mitra" pada sidebar</p>
                <a href="{{ route('daftar-mitra.index') }}" class="btn btn-success">List Mitra</a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Posting Artikel</h5>
                <p class="card-text">Bagikan keseruan dari Uniqlass dengan menulis artikel. Menu ini juga tersedia pada sidebar</p>
                <a href="{{ route('daftar-artikel.index') }}" class="btn btn-success">Go Write</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Upload Event</h5>
                <p class="card-text">Kirimkan event-event yang menarik dari Uniqlass. Menu ini tersedia juga di sidebar</p>
                <a href="{{ route('daftar-event.index') }}" class="btn btn-success">Lets Post</a>
            </div>
            </div>
        </div>
    </div>
    <div class="col mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Galeri Foto</h5>
                <p class="card-text">Upload foto-foto kegiatan menarik dari Mitra Uniqlass. Bisa diakses juga melalui sidebar di samping</p>
                <a href="{{ route('galeri.index') }}" class="btn btn-success">Upload Yuk</a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Konten Homepage</h5>
                <p class="card-text">Kelola konten yang ditampilkan pada halaman awal Uniqlass</p>
                <a href="/konten-homepage" class="btn btn-primary">Lest Start</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Konten "Tentang Uniqlass"</h5>
                <p class="card-text">Atur konten yang akan ditampilkan pada halaman "Tentang Kami"</p>
                <a href="/konten-tentang" class="btn btn-primary">Lest Go...</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

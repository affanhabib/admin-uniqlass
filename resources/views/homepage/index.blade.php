@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Konten Homepage</h3>
        </div>
        <div class="row">
            <div class="card mt-4" style="cursor: pointer;" onclick="window.location='/konten-homepage/header';">
                <div class="card-body">
                    <h5 class="card-title">Header</h5>
                    <p class="card-text">Header/Carousel yang akan ditampilkan di halaman home</p>
                </div>
            </div>
            <div class="card mt-4" style="cursor: pointer;" onclick="window.location='/konten-homepage/deskripsi';">
                <div class="card-body">
                    <h5 class="card-title">Deskripsi Singkat</h5>
                    <p class="card-text">Deskripsi dari Uniqlass yang akan ditampilkan di halaman home, di bawah Header</p>
                </div>
            </div>
            <div class="card mt-4" style="cursor: pointer;" onclick="window.location='/konten-homepage/instagram';">
                <div class="card-body">
                    <h5 class="card-title">Instagram</h5>
                    <p class="card-text">3 postingan Instagram dari akun Uniqlass yang ingin ditampilkan di homepage</p>
                </div>
            </div>
            <div class="card mt-4" style="cursor: pointer;" onclick="window.location='/konten-homepage/youtube';">
                <div class="card-body">
                    <h5 class="card-title">Youtube</h5>
                    <p class="card-text">3 video Youtube dari akun Uniqlass yang ingin ditampilkan di halaman home</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

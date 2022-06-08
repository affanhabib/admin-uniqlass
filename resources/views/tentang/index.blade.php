@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Konten Tentang Uniqlass</h3>
        </div>
        <div class="row">
            <div class="card mt-4" style="cursor: pointer;" onclick="">
                <div class="card-body">
                    <h5 class="card-title">Deskripsi Rinci, Visi dan Misi</h5>
                    <p class="card-text">Deskripsi dari Uniqlass yang lebih rinci; Visi dan Misi Uniqlass yang akan ditampilkan di halaman Tentang Uniqlass</p>
                </div>
            </div>
            <div class="card mt-4" style="cursor: pointer;" onclick="">
                <div class="card-body">
                    <h5 class="card-title">Foto Founder</h5>
                    <p class="card-text">Foto dari para pendiri Uniqlass beserta jabatan struktural</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

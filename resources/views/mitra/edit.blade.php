@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Mitra</h3>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('daftar-mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="logo" class="col-md-6 col-form-label text-md-right">logo</label>
                    <div class="col-md-6">
                        <input id="logo" type="file" class="rounded form-control @error('logo') is-invalid @enderror" name="logo" autofocus value="{{ $mitra->logo }}" accept="image/jpeg, image/png">
                        @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-md-6 col-form-label text-md-right">Nama</label>
                    <div class="col-md-6">
                        <input id="nama" type="text" class="rounded form-control @error('nama') is-invalid @enderror" name="nama" required autofocus value="{{ $mitra->nama }}">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="tahun_berdiri" class="col-md-6 col-form-label text-md-right">Tahun Berdiri</label>
                    <div class="col-md-6">
                        <input id="tahun_berdiri" type="text" class="rounded form-control @error('tahun_berdiri') is-invalid @enderror" name="tahun_berdiri" required autofocus value="{{ $mitra->tahun_berdiri }}">
                        @error('tahun_berdiri')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-md-6 col-form-label text-md-right">Deskripsi</label>
                    <div class="col-md-6">
                        <textarea id="deskripsi" type="text" class="rounded form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required autofocus>{{ $mitra->deskripsi }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi" class="col-md-6 col-form-label text-md-right">Lokasi</label>
                    <div class="col-md-6">
                        <input id="lokasi" type="text" class="rounded form-control @error('lokasi') is-invalid @enderror" name="lokasi" required autofocus value="{{ $mitra->lokasi }}">
                        @error('lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="jadwal" class="col-md-6 col-form-label text-md-right">Jadwal</label>
                    <div class="col-md-6">
                        <textarea id="jadwal" type="text" class="rounded form-control @error('jadwal') is-invalid @enderror" name="jadwal" required autofocus>{{ $mitra->jadwal }}</textarea>
                        @error('jadwal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="materi" class="col-md-6 col-form-label text-md-right">Materi</label>
                    <div class="col-md-6">
                        <textarea id="materi" type="text" class="rounded form-control @error('materi') is-invalid @enderror" name="materi" required autofocus>{{ $mitra->materi }}</textarea>
                        @error('materi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="perlengkapan_peserta" class="col-md-6 col-form-label text-md-right">Perlengkapan Peserta yang Harus Dibawa</label>
                    <div class="col-md-6">
                        <textarea id="perlengkapan_peserta" type="text" class="rounded form-control @error('perlengkapan_peserta') is-invalid @enderror" name="perlengkapan_peserta" required autofocus>{{ $mitra->perlengkapan_peserta }}</textarea>
                        @error('perlengkapan_peserta')
                            <span class="invalid- feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="fasilitas" class="col-md-6 col-form-label text-md-right">Fasilitas</label>
                    <div class="col-md-6">
                        <textarea id="fasilitas" type="text" class="rounded form-control @error('fasilitas') is-invalid @enderror" name="fasilitas" required autofocus>{{ $mitra->fasilitas }}</textarea>
                        @error('fasilitas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="keuntungan" class="col-md-6 col-form-label text-md-right">Keuntungan</label>
                    <div class="col-md-6">
                        <textarea id="keuntungan" type="text" class="rounded form-control @error('keuntungan') is-invalid @enderror" name="keuntungan" required autofocus>{{ $mitra->keuntungan }}</textarea>
                        @error('keuntungan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="sertifikat" class="col-md-6 col-form-label text-md-right">Sertifikat</label>
                    <div class="col-md-6">
                        <textarea id="sertifikat" type="text" class="rounded form-control @error('sertifikat') is-invalid @enderror" name="sertifikat" required autofocus>{{ $mitra->sertifikat }}</textarea>
                        @error('sertifikat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                        <a href="{{ route('daftar-mitra.index') }}" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor_basic/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'deskripsi' );
    CKEDITOR.replace( 'jadwal' );
    CKEDITOR.replace( 'materi' );
    CKEDITOR.replace( 'perlengkapan_peserta' );
    CKEDITOR.replace( 'fasilitas' );
    CKEDITOR.replace( 'keuntungan' );
    CKEDITOR.replace( 'sertifikat' );
    CKEDITOR.config.height = 150;
</script>
@endsection

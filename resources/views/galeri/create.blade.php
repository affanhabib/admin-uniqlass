@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Tambah Foto Mitra</h3>
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

            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="mitra_id" class="col-md-6 col-form-label text-md-right">Nama Mitra</label>
                    <div class="col-md-6">
                        <select id="mitra_id" class="form-control @error('mitra_id') is-invalid @enderror" name="mitra_id">
                            @foreach ($mitra as $mtr)
                            <option value="{{ $mtr->id }}">{{ $mtr->nama }}</option>
                            @endforeach
                        </select>
                        @error('mitra_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-md-6 col-form-label text-md-right">Foto Kegiatan</label>
                    <div class="col-md-6">
                        <input id="photo" type="file" class="rounded form-control @error('photo') is-invalid @enderror" name="photo" autofocus accept="image/jpeg, image/png">
                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Tambah') }}
                        </button>
                        <a href="{{ route('daftar-event.index') }}" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

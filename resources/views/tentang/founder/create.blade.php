@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Tambah Founder</h3>
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

            <form action="{{ route('founder.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="foto" class="col-md-6 col-form-label text-md-right">Foto</label>
                    <div class="col-md-6">
                        <input id="foto" type="file" class="rounded form-control @error('foto') is-invalid @enderror" name="foto" autofocus accept="image/jpeg, image/png">
                        @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-md-6 col-form-label text-md-right">Nama</label>
                    <div class="col-md-6">
                        <input id="nama" type="text" class="rounded form-control @error('nama') is-invalid @enderror" name="nama" required autofocus>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-md-6 col-form-label text-md-right">Jabatan</label>
                    <div class="col-md-6">
                        <input id="jabatan" type="text" class="rounded form-control @error('jabatan') is-invalid @enderror" name="jabatan" required autofocus>
                        @error('jabatan')
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
                        <a href="{{ route('founder.index') }}" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Video Instagram di Homepage</h3>
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
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div>
                <p>Ambil kode dibelakang link Youtube. Contoh: https://youtu.be/<span class="link-danger fw-bold">FE0MlF7tvec</span></p>
            </div>
            <form action="/update_yt" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="yt1" class="col-md-6 col-form-label text-md-right">Kode Video 1</label>
                    <div class="col-md-6">
                        <input id="yt1" type="text" class="rounded form-control @error('yt1') is-invalid @enderror" name="yt1" required autofocus value="{{ $yt->yt1 }}">
                        @error('yt1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="yt2" class="col-md-6 col-form-label text-md-right">Kode Video 2</label>
                    <div class="col-md-6">
                        <input id="yt2" type="text" class="rounded form-control @error('yt2') is-invalid @enderror" name="yt2" required autofocus value="{{ $yt->yt2 }}">
                        @error('yt2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="yt3" class="col-md-6 col-form-label text-md-right">Kode Video 3</label>
                    <div class="col-md-6">
                        <input id="yt3" type="text" class="rounded form-control @error('yt3') is-invalid @enderror" name="yt3" required autofocus value="{{ $yt->yt3 }}">
                        @error('yt3')
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
                        <a href="/konten-homepage" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

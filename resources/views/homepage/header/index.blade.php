@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Header Homepage</h3>
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

            <form action="/update_header" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="judul" class="col-md-6 col-form-label text-md-right">Judul</label>
                    <div class="col-md-6">
                        <input id="judul" type="text" class="rounded form-control @error('judul') is-invalid @enderror" name="judul" required autofocus value="{{ $header->judul }}">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="caption" class="col-md-6 col-form-label text-md-right">Caption</label>
                    <div class="col-md-6">
                        <textarea id="caption" type="text" class="rounded form-control @error('caption') is-invalid @enderror" name="caption" required autofocus>{{ $header->caption }}</textarea>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="tombol" class="col-md-6 col-form-label text-md-right">Copywriting Tombol</label>
                    <div class="col-md-6">
                        <input id="tombol" type="text" class="rounded form-control @error('tombol') is-invalid @enderror" name="tombol" required autofocus value="{{ $header->tombol }}">
                        @error('tombol')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="link" class="col-md-6 col-form-label text-md-right">Link Tombol</label>
                    <div class="col-md-6">
                        <input id="link" type="text" class="rounded form-control @error('link') is-invalid @enderror" name="link" required autofocus value="{{ $header->link }}">
                        @error('link')
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
<script src="{{ asset('ckeditor_basic/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'caption' );
    CKEDITOR.config.height = 150;
</script>
@endsection

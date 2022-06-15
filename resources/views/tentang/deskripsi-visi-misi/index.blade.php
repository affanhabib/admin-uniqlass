@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Tentang Uniqlas</h3>
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

            <form action="/update_tentang" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="deskripsi" class="col-md-6 col-form-label text-md-right">Deskripsi</label>
                    <div class="col-md-6">
                        <textarea id="deskripsi" type="text" class="rounded form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required autofocus>{{ $tentang->deskripsi }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="visi" class="col-md-6 col-form-label text-md-right">Visi</label>
                    <div class="col-md-6">
                        <textarea id="visi" type="text" class="rounded form-control @error('visi') is-invalid @enderror" name="visi" required autofocus>{{ $tentang->visi }}</textarea>
                        @error('visi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="misi" class="col-md-6 col-form-label text-md-right">Misi</label>
                    <div class="col-md-6">
                        <textarea id="misi" type="text" class="rounded form-control @error('misi') is-invalid @enderror" name="misi" required autofocus>{{ $tentang->misi }}</textarea>
                        @error('misi')
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
                        <a href="/konten-tentang" class="btn btn-secondary">
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
    CKEDITOR.replace( 'misi' );
    CKEDITOR.config.height = 150;
</script>
@endsection

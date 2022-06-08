@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Postingan Instagram di Homepage</h3>
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

            <form action="/update_ig" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="ig1" class="col-md-6 col-form-label text-md-right">Link Postingan 1</label>
                    <div class="col-md-6">
                        <input id="ig1" type="text" class="rounded form-control @error('ig1') is-invalid @enderror" name="ig1" required autofocus value="{{ $ig->ig1 }}">
                        @error('ig1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="ig2" class="col-md-6 col-form-label text-md-right">Link Postingan 2</label>
                    <div class="col-md-6">
                        <input id="ig2" type="text" class="rounded form-control @error('ig2') is-invalid @enderror" name="ig2" required autofocus value="{{ $ig->ig2 }}">
                        @error('ig2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="ig3" class="col-md-6 col-form-label text-md-right">Link Postingan 3</label>
                    <div class="col-md-6">
                        <input id="ig3" type="text" class="rounded form-control @error('ig3') is-invalid @enderror" name="ig3" required autofocus value="{{ $ig->ig3 }}">
                        @error('ig3')
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

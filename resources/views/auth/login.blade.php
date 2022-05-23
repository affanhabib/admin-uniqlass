@extends('layouts.login')

@section('content')
<div class="row full-height">
    <div class="col-md-6 bg-white">
        <div class="d-flex justify-content-center full-height">
            <div class="col-md-6 col-8 d-flex align-items-center full-height">
                <div class="col">
                    <div class="row d-md-none mb-4">
                        <img class="logo" src="{{ asset('img/uniqlass_no background.png') }}" alt="">
                    </div>
                    <div class="row">
                        <h2 class="title">Selamat Datang Kembali</h2>
                    </div>
                    <div class="row">
                        <p class="text-secondary">Selamat datang kembali! Masuk untuk menuju dashboard</p>
                    </div>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mt-2">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="">
                                    <button type="submit" class="btn btn-success" style="width: 100%;">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-none d-md-block bg-light">
        <div class="d-flex justify-content-center align-items-center full-height">
            <img class="" src="{{ asset('img/uniqlass_no background.png') }}" alt="" height="75">
        </div>
    </div>
</div>
@endsection

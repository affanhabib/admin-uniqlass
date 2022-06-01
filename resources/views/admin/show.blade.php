@extends('layouts.dashboard')

@section('content')
<div class="container">
<div class="col">
        <div class="row">
            <h3 class="title">Detail Admin</h3>
        </div>
        <div class="row">
            <form method="" action="">
                <div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-4">
                        <input id="name" type="text" class="rounded form-control" name="name" value="{{ $admin->name }}" readonly>
                    </div>
                </div>
                <div>
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-4">
                        <input id="email" type="email" class="rounded form-control" name="email" value="{{ $admin->email }}" readonly>
                    </div>
                </div>
                <div>
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                    <div class="col-md-4">
                        <select id="role" class="form-control" name="role" disabled>
                            <option value="{{ $admin->role }}">{{ $admin->role }}</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="mt-3">
                        <a href="{{ route('daftar-admin.index') }}" class="btn btn-secondary">
                            {{ __('Kembali') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

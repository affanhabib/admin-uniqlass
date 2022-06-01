@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Admin</h3>
        </div>
        <div class="row">
            <form method="POST" action="{{ route('daftar-admin.update', $admin->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-4">
                        <input id="name" type="text" class="rounded form-control @error('name') is-invalid @enderror" name="name" value="{{ $admin->name }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-md-4">
                        <input id="password" type="password" class="rounded form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-md-4">
                        <input id="password-confirm" type="password" class="rounded form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div>
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                    <div class="col-md-4">
                        <select id="role" class="form-control @error('role') is-invalid @enderror" name="role">
                            @if ($admin->role == "admin")
                            <option value="admin">Admin</option>
                            <option value="owner">Owner</option>
                            @elseif ($admin->role == "owner")
                            <option value="owner">Owner</option>
                            <option value="admin">Admin</option>
                            @elseif (Auth::user()->role == "superadmin")
                            <option value="superadmin">Superadmin</option>
                            <option value="admin">Admin</option>
                            <option value="owner">Owner</option>
                            @endif
                        </select>
                        @error('role')
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
                        <a href="{{ route('daftar-admin.index') }}" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

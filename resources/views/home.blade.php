@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h4 class="mb-3 title">Selamat Datang, {{ Auth::user()->name }}</h4>
</div>
@endsection

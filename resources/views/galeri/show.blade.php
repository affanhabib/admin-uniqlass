@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Galeri Foto {{ $data['mitra']->nama }}</h3>
        </div>
        <div class="row mt-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @foreach ($data['galeri'] as $glr)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('photo/') }}/{{$glr->photo}}" alt="">
                    <div class="card-body">
                        <form action="{{ route('galeri.destroy', $glr->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-danger" type='submit'><i class="fa fa-trash"></i> Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

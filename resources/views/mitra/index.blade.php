@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col">
                <h3 class="title">Daftar Mitra</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('daftar-mitra.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Mitra</a>
            </div>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td scope="col">No</td>
                        <td scope="col">Nama</td>
                        <td scope="col">Lokasi</td>
                        <td scope="col">Logo Mitra</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mitra as $mtr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $mtr->nama }}</td>
                        <td>{{ $mtr->lokasi }}</td>
                        <td>
                            <img class="d-flex justify-content-center" src="{{ asset('logo/') }}/{{$mtr->logo}}" alt="" style="height: 50px">
                        </td>
                        <td>
                            <form action="{{ route('daftar-mitra.destroy', $mtr->id) }}" method="POST">
                                <a href="{{ route('daftar-mitra.show',$mtr->id) }}" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                                <a href="{{ route('daftar-mitra.edit',$mtr->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type='submit'><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

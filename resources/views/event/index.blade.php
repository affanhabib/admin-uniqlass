@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col">
                <h3 class="title">Daftar Event</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('daftar-event.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Event</a>
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
                        <td scope="col">Judul Event</td>
                        <td scope="col">Tanggal</td>
                        <td scope="col">Lokasi</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($event as $evn)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $evn->judul_event }}</td>
                        @if ($evn->tanggal_mulai != $evn->tanggal_berakhir)
                            <td>{{ $evn->tanggal_mulai }} - {{ $evn->tanggal_berakhir }}</td>
                        @else
                            <td>{{ $evn->tanggal_mulai }}</td>
                        @endif
                        <td>{{ $evn->lokasi }}</td>
                        <td>
                            <form action="{{ route('daftar-event.destroy', $evn->id) }}" method="POST">
                                <a href="{{ route('daftar-event.show',$evn->id) }}" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                                <a href="{{ route('daftar-event.edit',$evn->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
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

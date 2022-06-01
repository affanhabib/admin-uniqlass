@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col">
                <h3 class="title">Daftar Admin</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('daftar-admin.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah User</a>
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
                        <td scope="col">Role</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $adm)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $adm->name }}</td>
                        <td>{{ $adm->role }}</td>
                        <td>
                            @if (Auth::user()->role == 'superadmin' )
                            <form action="{{ route('daftar-admin.destroy', $adm->id) }}" method="POST">
                                <a href="{{ route('daftar-admin.show',$adm->id) }}" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                                <a href="{{ route('daftar-admin.edit',$adm->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type='submit'><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                            @elseif ($adm->id != 1)
                            <form action="{{ route('daftar-admin.destroy', $adm->id) }}" method="POST">
                                <a href="{{ route('daftar-admin.show',$adm->id) }}" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                                <a href="{{ route('daftar-admin.edit',$adm->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type='submit'><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

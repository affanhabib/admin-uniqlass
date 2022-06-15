@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col">
                <h3 class="title">Daftar Founder</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('founder.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Founder</a>
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
                        <td scope="col">Jabatan</td>
                        <td scope="col">Foto</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($founder as $fdr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $fdr->nama }}</td>
                        <td>{{ $fdr->jabatan }}</td>
                        <td>
                            <img class="d-flex justify-content-center" src="{{ asset('founder/') }}/{{$fdr->foto}}" alt="" style="height: 50px">
                        </td>
                        <td>
                            <form action="{{ route('founder.destroy', $fdr->id) }}" method="POST">
                                <!-- <a href="{{ route('founder.show',$fdr->id) }}" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a> -->
                                <a href="{{ route('founder.edit', $fdr->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
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

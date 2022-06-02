@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <h3 class="title">Edit Event</h3>
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

            <form action="{{ route('daftar-event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="poster" class="col-md-6 col-form-label text-md-right">Poster</label>
                    <div class="col-md-6">
                        <input id="poster" type="file" class="rounded form-control @error('poster') is-invalid @enderror" name="poster" autofocus accept="image/jpeg, image/png">
                        @error('poster')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="program" class="col-md-6 col-form-label text-md-right">Program</label>
                    <div class="col-md-6">
                        <input id="program" type="text" class="rounded form-control @error('program') is-invalid @enderror" name="program" required autofocus value="{{ $event->program }}">
                        @error('program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="subprogram" class="col-md-6 col-form-label text-md-right">Sub Program</label>
                    <div class="col-md-6">
                        <input id="subprogram" type="text" class="rounded form-control @error('subprogram') is-invalid @enderror" name="subprogram" required autofocus value="{{ $event->subprogram }}">
                        @error('subprogram')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul_event" class="col-md-6 col-form-label text-md-right">Judul Event</label>
                    <div class="col-md-6">
                        <input id="judul_event" type="text" class="rounded form-control @error('judul_event') is-invalid @enderror" name="judul_event" required autofocus value="{{ $event->judul_event }}">
                        @error('judul_event')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai" class="col-md-6 col-form-label text-md-right">Tanggal Mulai</label>
                    <div class="col-md-6">
                        <input id="tanggal_mulai" type="date" class="rounded form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" required autofocus value="{{ $event->tanggal_mulai }}">
                        @error('tanggal_mulai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_berakhir" class="col-md-6 col-form-label text-md-right">Tanggal Berakhir</label>
                    <div class="col-md-6">
                        <input id="tanggal_berakhir" type="date" class="rounded form-control @error('tanggal_berakhir') is-invalid @enderror" name="tanggal_berakhir" required autofocus value="{{ $event->tanggal_berakhir }}">
                        @error('tanggal_berakhir')
                            <span class="invalid- feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="waktu" class="col-md-6 col-form-label text-md-right">Waktu</label>
                    <div class="col-md-6">
                        <input id="waktu" type="time" class="rounded form-control @error('waktu') is-invalid @enderror" name="waktu" required autofocus value="{{ $event->waktu }}">
                        @error('waktu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="narasumber" class="col-md-6 col-form-label text-md-right">Narasumber</label>
                    <div class="col-md-6">
                        <textarea id="narasumber" type="text" class="rounded form-control @error('narasumber') is-invalid @enderror" name="narasumber" required autofocus>{{ $event->narasumber }}</textarea>
                        @error('narasumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi" class="col-md-6 col-form-label text-md-right">Lokasi</label>
                    <div class="col-md-6">
                        <input id="lokasi" type="text" class="rounded form-control @error('lokasi') is-invalid @enderror" name="lokasi" required autofocus value="{{ $event->lokasi }}">
                        @error('lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-md-6 col-form-label text-md-right">Deskripsi</label>
                    <div class="col-md-6">
                        <textarea id="deskripsi" type="text" class="rounded form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required autofocus>{{ $event->deskripsi }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="link" class="col-md-6 col-form-label text-md-right">Link Pendaftaran</label>
                    <div class="col-md-6">
                        <input id="link" type="text" class="rounded form-control @error('link') is-invalid @enderror" name="link" required autofocus value="{{ $event->link }}">
                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="show_carousel" class="col-md-6 col-form-label text-md-right">Dijadikan Header Homepage?</label>
                    <div class="col-md-6">
                        <select id="show_carousel" class="form-control @error('show_carousel') is-invalid @enderror" name="show_carousel">
                            @if ($event->show_carousel == "0")
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                            @else
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                            @endif
                        </select>
                        @error('show_carousel')
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
                        <a href="{{ route('daftar-event.index') }}" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor_basic/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'deskripsi' );
    CKEDITOR.replace( 'narasumber' );
    CKEDITOR.config.height = 150;
</script>
@endsection

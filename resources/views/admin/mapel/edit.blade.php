@extends('template.index')

{{-- @dd($record) --}}
@section('content')
    <div class="page-header">
        <h3 class="page-title">Tambah Mata Pelajaran</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Mata Pelajaran </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            <ul class="list-ticked">
                                @foreach ($errors->all() as $r)
                                    <li>{{ $r }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <hr>
                        </div>
                    @endif

                    <form action="{{ route('mapel.update', $record->idmapel) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_mapel">Nama Mata Pelajaran </label>
                                <input type="text" name="nama_mapel" id="nama_mapel"
                                    class="form-control"value="{{ $record->nama_mapel }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">Jenis Mata Pelajaran:</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="utama" {{ $record->type == 'utama' ? 'selected' : '' }}>Utama</option>
                                    <option value="mulok" {{ $record->type == 'mulok' ? 'selected' : '' }}>Muatan Lokal
                                        (Mulok)</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" id="deskripsi"
                                    class="form-control"value="{{ $record->deskripsi }}">
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

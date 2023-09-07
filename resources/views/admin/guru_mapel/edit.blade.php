@extends('template.index')

{{-- @dd($record) --}}
@section('content')
    <div class="page-header">
        <h3 class="page-title">Edit Guru Mata Pelajaran</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Edit Guru Mata Pelajaran </li>
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

                    <form action="{{ route('guru_mapel.update', $record->id_gurumapel) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_guru">Nama </label>
                                    <input type="text" name="nama_guru" id="nama_guru"
                                        class="form-control"value="{{ $record->nama_guru }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_induk">NIP</label>
                                    <input type="number" name="nip" id="nip" class="form-control"
                                        value="{{ $record->nip }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <select class="form-control form-control-lg" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="P" {{ $record->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                            Perempuan</option>
                                        <option value="L" {{ $record->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pilih Mata Pelajaran Terkait</label>
                                    <select class="form-control form-control-lg" name="idmapel" id="idmapel"
                                        onchange="getTableKnilai(this.value)">
                                        @foreach ($mapel as $i => $r)
                                            <option value="{{ $r->idmapel }}"
                                                {{ $r->idmapel == $record->idmapel ? 'selected' : '' }}>
                                                {{ $r->nama_mapel }}</option>
                                        @endforeach
                                    </select>
                                </div>
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

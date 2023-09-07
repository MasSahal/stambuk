@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Edit Kriteria Nilai</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Edit Kriteria </li>
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
                    <form action="{{ route('k_nilai.update', $record->idkriteria) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pilih Mata Pelajaran</label>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kriteria">Kriteria</label>
                                    <textarea name="kriteria" id="" class="form-control" rows="3">@php echo $record->kriteria @endphp</textarea>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

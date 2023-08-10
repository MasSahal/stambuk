@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Edit Nilai Siswa {{ $record->nama_siswa }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Edit Nilai </li>
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

                    <form action="{{ route('nilai.update', $record->idsiswa) }}" method="post">
                        @csrf
                        @method('PUT')
                        @foreach ($mapel as $m)
                            <input type="hidden" name="idsiswa[]" value="{{ $siswa->idsiswa }}">
                            <input type="hidden" name="id_mapel[]" value="{{ $m->idmapel }}">
                            <h4>Nilai {{ $m->nama_mapel }}</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="p_nilai">Nilai Predikat </label>
                                        <input type="number" name="p_nilai[]" id="p_nilai" class="form-control"
                                            min="0" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="k_nilai">Nilai Ketrampilan</label>
                                        <input type="number" name="k_nilai[]" id="k_nilai" class="form-control"
                                            min="0" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <hr>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

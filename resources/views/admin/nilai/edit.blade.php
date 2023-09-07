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
                    <h4 class="text-center">Form Penilaian Semester {{ $ta->semester }} - Tahun Ajaran {{ $ta->ta_awal }} /
                        {{ $ta->ta_akhir }}</h4>
                    <hr>
                    <table class="table table-sm table-borderless w-50">
                        <tr>
                            <th>NIS</th>
                            <td>:</td>
                            <td>{{ $record->nis }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $record->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>:</td>
                            <td>{{ $record->nama_kelas }}</td>
                        </tr>
                    </table>
                    <hr>

                    <form action="{{ route('nilai.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <table class="table table table-bordered table-hover">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th class="py-3">No</th>
                                    <th class="py-3">Nama Mapel</th>
                                    <th class="py-3">Nilai Pengetahuan</th>
                                    <th class="py-3">Nilai Ketrampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $no => $m)
                                    <tr>
                                        <td>{{ $no += 1 }}</td>
                                        <td>{{ $m->nama_mapel }}</td>
                                        <td>
                                            <input type="hidden" name="idsiswa[]" value="{{ $record->idsiswa }}">
                                            <input type="hidden" name="id_mapel[]" value="{{ $m->idmapel }}">
                                            <input type="hidden" name="id_transkrip[]"
                                                value="{{ $record->id_transkrip }}">
                                            {{-- # --}}
                                            <input type="number" name="p_nilai[]" id="p_nilai"
                                                class="form-control form-control-sm" min="0"
                                                value="{{ $m->p_nilai }}"required>
                                        </td>
                                        <td>
                                            <input type="number" name="k_nilai[]" id="k_nilai"
                                                class="form-control form-control-sm" min="0"
                                                value="{{ $m->k_nilai }}"required>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

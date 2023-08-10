@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Detail Nilai {{ $record->nama_siswa }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Detail Nilai Siswa </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Nama Siswa</th>
                                    <td>:</td>
                                    <td><?= $record->nama_siswa ?></td>
                                </tr>
                                <tr>
                                    <th>NIS</th>
                                    <td>:</td>
                                    <td><?= $record->nis ?></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>:</td>
                                    <td><?= $record->nama_kelas ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="mt-2">
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-responsive-lg" id="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Mata Pelajaran</th>
                                            <th colspan="3">
                                                Pengetahuan
                                            </th>
                                            <th colspan="3">
                                                Keterampilan
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nilai as $i => $r)
                                            <tr>
                                                <td>{{ $i += 1 }}</td>
                                                <td>{{ $r->nama_mapel }}</td>
                                                <td>{{ $r->p_nilai }}</td>
                                                <td>{{ $r->p_predikat }}</td>
                                                <td>{{ $r->p_deskripsi }}</td>
                                                <td>{{ $r->k_nilai }}</td>
                                                <td>{{ $r->k_predikat }}</td>
                                                <td>{{ $r->k_deskripsi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
@endsection

@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Detail Mata Pelajaran {{ $record->nama_mapel }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Mata pelajaran </li>
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
                                    <th>Nama Mata Pelajaran</th>
                                    <td>:</td>
                                    <td><?= $record->nama_mapel ?></td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td><?= $record->type ?></td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>:</td>
                                    <td><?= $record->deskripsi ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="mt-2">
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nilai Pengetahuan</th>
                                            <th>Nilai Keterampilan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $i => $r)
                                            <?= var_dump($r->p_nilai) ?>
                                            @if ($record->idmapel == $r->id_mapel)
                                                <tr>
                                                    <td>{{ $i += 1 }}</td>
                                                    <td>{{ $r->nama_siswa }}</td>
                                                    <td>
                                                        {{ $r->p_nilai }}
                                                    <td>
                                                        {{ $r->k_nilai }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('nilai.edit', $r->idsiswa) }}"
                                                            class="btn btn-sm btn-warning">Edit Nilai</a>
                                                        <a href="{{ route('nilai.create', 'id=' . $r->idsiswa . '&idmapel=' . $record->idmapel) }}"
                                                            class="btn btn-sm btn-success">Input Nilai</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
@endsection

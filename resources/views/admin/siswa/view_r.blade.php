@extends('template.index')


@section('content')
    <style>
        thead {
            font-weight: bold;
        }
    </style>
    <div class="page-header">
        <h3 class="page-title">Raport {{ $record->nama_siswa }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Raport Siswa </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="text-center">RAPORT DAN PROFIL PESERTA DIDIK </h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table table-borderless">
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td><?= $record->nama_siswa ?></td>
                                </tr>
                                <tr>
                                    <th>NISN</th>
                                    <td>:</td>
                                    <td><?= $record->no_induk ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <td>:</td>
                                    <td>{{ config('constants.settings.nama_sekolah') }}</td>
                                </tr>
                                <tr>
                                    <th>ِAlamat Sekolah</th>
                                    <td>:</td>
                                    <td>{{ config('constants.settings.alamat_sekolah') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table table-borderless">

                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td><?= $record->nama_kelas ?></td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td>:</td>
                                    <td><?= $record->semester ?? '--' ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun Ajar</td>
                                    <td>:</td>
                                    <td><?= $record->th_pelajaran ?? '--' ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <h4>A. Kompetensi Sikap</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="3"><span class="text-center">Deskripsi</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sikap Spiritual</td>
                                        <td>{{ $raport->sikap_spiritual ?? '--' }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sikap Sosial</td>
                                        <td>{{ $raport->sikap_sosial ?? '--' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <h4>B. Kompetensi Pengetahuan dan Keterampilan</h4>
                            <br>
                            <table class="table table-bordered">
                                <thead>
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
                                    @foreach ($nilai_u as $i => $r)
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

                            <br>
                            <h4>Muatan Lokal</h4>
                            <table class="table table-bordered">
                                <thead>
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
                                    @foreach ($nilai_m as $i => $r)
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

                            <br>
                            <h4>C. Ekstra Kurikuler</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan Ekstra Kurikuler</th>
                                    <th>Keterangan</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $raport->eskul1 ?? '--' }}</td>
                                    <td>{{ $raport->deskripsi_eskul1 ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>{{ $raport->eskul2 ?? '--' }}</td>
                                    <td>{{ $raport->deskripsi_eskul2 ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>{{ $raport->eskul3 ?? '--' }}</td>
                                    <td>{{ $raport->deskripsi_eskul3 ?? '--' }}</td>
                                </tr>
                            </table>
                            <br>
                            <h4>D. Saran Saran</h4>
                            <p>{{ $raport->saran ?? '--' }}</p>

                            <br>
                            <h4>E. Tinggi dan Berat Badan</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Aspek yang dinilai</th>
                                    <th>Nilai</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tinggi Badan</td>
                                    <td>{{ $raport->tinggi_badan ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Berat Badan</td>
                                    <td>{{ $raport->berat_badan ?? '--' }}</td>
                                </tr>
                            </table>

                            <br>
                            <h4>F. Kondisi Kesehatan</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Aspek Fisik</th>
                                    <th>Keterangan</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pendengaran</td>
                                    <td>{{ $raport->pendengaran ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pengelihatan</td>
                                    <td>{{ $raport->penglihatan ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Gigi</td>
                                    <td>{{ $raport->gigi ?? '--' }}</td>
                                </tr>
                            </table>

                            <br>
                            <h4>G. Prestasi</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Prestasi</th>
                                    <th>Keterangan</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $raport->prestasi1 ?? '--' }}</td>
                                    <td>{{ $raport->ket_pres1 ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>{{ $raport->prestasi2 ?? '--' }}</td>
                                    <td>{{ $raport->ket_pres2 ?? '--' }}</td>
                                </tr>
                            </table>

                            <br>
                            <h4>H. Ketidakhadiran</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <td>1</td>
                                    <td>Sakit</td>
                                    <td>{{ $raport->sakit ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ijin</td>
                                    <td>{{ $raport->izin ?? '--' }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanpa Keterangan</td>
                                    <td>{{ $raport->tanpa_ket ?? '--' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="mt-2">
                        <hr>
                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

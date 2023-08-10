@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Edit Raport</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Raport </li>
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
                    @php
                        $nilai = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang', 'Sangat Kurang'];
                    @endphp
                    <form action="{{ route('raport.update', $record->idsiswa) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <h4>Data Umum</h4>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <input type="number" class="form-control" id="semester" name="semester"
                                        value="{{ $record->semester }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="th_pelajaran">Tahun Pelajaran</label>
                                    <input type="text" class="form-control" id="th_pelajaran" name="th_pelajaran"
                                        value="{{ $record->th_pelajaran }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sikap_spiritual">Sikap Spiritual</label>
                                    <input type="text" class="form-control" id="sikap_spiritual" name="sikap_spiritual"
                                        value="{{ $record->sikap_spiritual }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sikap_sosial">Sikap Sosial</label>
                                    <input type="text" class="form-control" id="sikap_sosial" name="sikap_sosial"
                                        value="{{ $record->sikap_sosial }}">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <h4>Data Ekstrakurikuler</h4>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eskul1">Ekstrakurikuler 1</label>
                                    <input type="text" class="form-control" id="eskul1" name="eskul1"
                                        value="{{ $record->eskul1 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="deskripsi_eskul1">Deskripsi Ekstrakurikuler 1</label>
                                    <textarea class="form-control" id="deskripsi_eskul1" name="deskripsi_eskul1">{{ $record->deskripsi_eskul1 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eskul2">Ekstrakurikuler 2</label>
                                    <input type="text" class="form-control" id="eskul2" name="eskul2"
                                        value="{{ $record->eskul2 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="deskripsi_eskul2">Deskripsi Ekstrakurikuler 2</label>
                                    <textarea class="form-control" id="deskripsi_eskul2" name="deskripsi_eskul2">{{ $record->deskripsi_eskul2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eskul2">Ekstrakurikuler 3</label>
                                    <input type="text" class="form-control" id="eskul3" name="eskul3"
                                        value="{{ $record->eskul3 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="deskripsi_eskul3">Deskripsi Ekstrakurikuler 3</label>
                                    <textarea class="form-control" id="deskripsi_eskul3" name="deskripsi_eskul3">{{ $record->deskripsi_eskul3 }}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <h4>Data Penilaian</h4>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="saran">Saran</label>
                                    <textarea class="form-control" id="saran" name="saran">{{ $record->saran }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tinggi_badan">Tinggi Badan</label>
                                    <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan"
                                        value="{{ $record->tinggi_badan }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="berat_badan">Berat Badan</label>
                                    <input type="number" class="form-control" id="berat_badan" name="berat_badan"
                                        value="{{ $record->berat_badan }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pendengaran">Pendengaran</label>
                                    <input type="text" class="form-control" id="pendengaran" name="pendengaran"
                                        value="{{ $record->pendengaran }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penglihatan">Penglihatan</label>
                                    <input type="text" class="form-control" id="penglihatan" name="penglihatan"
                                        value="{{ $record->penglihatan }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gigi">Gigi</label>
                                    <input type="text" class="form-control" id="gigi" name="gigi"
                                        value="{{ $record->gigi }}">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <h4>Data Prestasi</h4>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prestasi1">Prestasi 1</label>
                                    <input type="text" class="form-control" id="prestasi1" name="prestasi1"
                                        value="{{ $record->prestasi1 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ket_pres1">Keterangan Prestasi 1</label>
                                    <textarea class="form-control" id="ket_pres1" name="ket_pres1">{{ $record->ket_pres1 }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prestasi2">Prestasi 2</label>
                                    <input type="text" class="form-control" id="prestasi2" name="prestasi2"
                                        value="{{ $record->prestasi2 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ket_pres2">Keterangan Prestasi 2</label>
                                    <textarea class="form-control" id="ket_pres2" name="ket_pres2">{{ $record->ket_pres2 }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <h4>Data Kehadiran</h4>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sakit">Jumlah Sakit</label>
                                    <input type="number" class="form-control" id="sakit" name="sakit"
                                        value="{{ $record->sakit }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="izin">Jumlah Izin</label>
                                    <input type="number" class="form-control" id="izin" name="izin"
                                        value="{{ $record->izin }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanpa_ket">Tanpa Keterangan</label>
                                    <input type="number" class="form-control" id="tanpa_ket" name="tanpa_ket"
                                        value="{{ $record->tanpa_ket }}">
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

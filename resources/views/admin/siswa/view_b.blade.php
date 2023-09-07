@extends('template.index')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Profil {{ $record->nama_siswa }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Profil Siswa </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="text-center">PROFIL PESERTA DIDIK </h4>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-borderless">
                                <tr>
                                    <td style="width:300px">1. Nama Peserta Didik </td>
                                    <td>:</td>
                                    <td><?= $record->nama_siswa ?></td>
                                </tr>
                                <tr>
                                    <td>2. Nomor Induk</td>
                                    <td>:</td>
                                    <td><?= $record->no_induk ?></td>
                                </tr>
                                <tr>
                                    <td>3. Tempat, Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $record->tempat_lahir }} {{ $record->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>4. Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $record->jenis_kelamin ?></td>
                                </tr>
                                <tr>
                                    <td>5. Agama</td>
                                    <td>:</td>
                                    <td><?= $record->agama ?></td>
                                </tr>
                                <tr>
                                    <td>6. Anak Ke</td>
                                    <td>:</td>
                                    <td><?= $record->anak_ke ?></td>
                                </tr>
                                <tr>
                                    <td>7. Alamat Peserta Didik </td>
                                    <td>:</td>
                                    <td><?= $record->alamat_siswa ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3">8. Nama Orang Tua</td>
                                </tr>
                                <tr>
                                    <td>a. Ayah</td>
                                    <td>:</td>
                                    <td>{{ $record->nama_ayah }}</td>
                                <tr>
                                    <td>b. Ibu</td>
                                    <td>:</td>
                                    <td>{{ $record->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">9. Pekerjaan Orang Tua</td>
                                </tr>
                                <tr>
                                    <td>a. Ayah</td>
                                    <td>:</td>
                                    <td>{{ $record->pekerjaan_ayah }}</td>
                                <tr>
                                    <td>b. Ibu</td>
                                    <td>:</td>
                                    <td>{{ $record->pekerjaan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">10. Alamat Orang Tua</td>
                                </tr>
                                <tr>
                                    <td>Jalan</td>
                                    <td>:</td>
                                    <td>{{ $record->jalan }}</td>
                                </tr>
                                <tr>
                                    <td>Kelurahan/ Desa</td>
                                    <td>:</td>
                                    <td>{{ $record->kelurahan_desa }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan/ Kota</td>
                                    <td>:</td>
                                    <td>{{ $record->kecamatan_kota }}</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td>{{ $record->kabupaten_kota }}</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>{{ $record->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">11. Wali Peserta Didik </td>
                                </tr>
                                <tr>
                                    <td>a. Nama</td>
                                    <td>:</td>
                                    <td>{{ $record->nama_wali }}</td>
                                </tr>
                                <tr>
                                    <td>b. Pekerjan</td>
                                    <td>:</td>
                                    <td>{{ $record->pekerjaan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>c. Alamat</td>
                                    <td>:</td>
                                    <td>{{ $record->alamat_wali }}</td>
                                </tr>
                            </table>

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img src="" alt="" style="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <hr>
                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('siswa.print', $record->idsiswa) . '?aksi=profile' }}" class="btn btn-success"
                            target="_blank">Print</a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

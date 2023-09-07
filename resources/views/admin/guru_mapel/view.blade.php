@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Detail Wali Kelas {{ $record->nama }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Wali Kelas </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table table-borderless">
                                <tr>
                                    <th>NIP</th>
                                    <td>:</td>
                                    <td><?= $record->nip ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Wali Kelas</th>
                                    <td>:</td>
                                    <td><?= $record->nama ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>:</td>
                                    <td><?= $record->tempat_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>:</td>
                                    <td><?= $record->tanggal_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis kelamin</th>
                                    <td>:</td>
                                    <td><?= $record->jenis_kelamin ?></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>:</td>
                                    <td><?= $record->agama ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>:</td>
                                    <td><?= $record->alamat ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td><?= $record->email ?></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="mt-2">
                        <hr>
                        <a href="{{ route('walas.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

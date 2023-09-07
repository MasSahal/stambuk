@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Arsip Data</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Arsip Data</li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive b-0">
                        <table id="menu" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->no_induk }}</td>
                                        <td>{{ $r->nama_siswa }}</td>
                                        <td>{{ $r->kelas }}</td>
                                        <td>
                                            <a name="" id="" class="btn btn-sm btn-warning"
                                                href="{{ route('siswa.show', $r->idsiswa . '?aksi=profile') }}"
                                                role="button">
                                                Arsip Biodata
                                            </a>
                                            <a name="" id="" class="btn btn-sm btn-success"
                                                href="{{ route('siswa.show', $r->idsiswa . '?aksi=raport') }}"
                                                role="button">
                                                Arsip Raport
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

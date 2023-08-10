@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Data Nilai</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Nilai </li>
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
                                    <th>Nama Siswa</th>
                                    <th>Nama Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->nama_siswa }}</td>
                                        <td>{{ $r->nama_kelas }}</td>
                                        <td>
                                            @if ($r->input_nilai)
                                                <a name="" id="" class="btn btn-sm btn-secondary"
                                                    href="{{ route('nilai.show', $r->idsiswa) }}" role="button">
                                                    Lihat Nilai
                                                </a>
                                                <a name="" id="" class="btn btn-sm btn-warning"
                                                    href="{{ route('nilai.edit', $r->idsiswa) }}" role="button">
                                                    Edit Nilai
                                                </a>
                                            @else
                                                <a name="" id="" class="btn btn-sm btn-info"
                                                    href="{{ route('nilai.create', 'idsiswa=' . $r->idsiswa) }}"
                                                    role="button">
                                                    Input Nilai
                                                </a>
                                            @endif
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

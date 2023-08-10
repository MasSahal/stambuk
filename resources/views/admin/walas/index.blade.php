@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Data Wali Kelas</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Wali Kelas </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <a href="{{ route('walas.create') }}" class="btn btn-success mt-2 mt-sm-0 btn-icon-text">
                        Tambah Data
                    </a>
                    <a href="{{ route('walas.index') }}" class="btn btn-info mt-2 mt-sm-0 btn-icon-text">
                        Refresh
                    </a>

                    <hr>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-light-success color-success  alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    <div class="table-responsive b-0">
                        <table id="menu" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama Wali Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->nip }}</td>
                                        <td>{{ $r->nama }}</td>
                                        <td>
                                            <form action="{{ route('walas.destroy', $r->idwali_kelas) }}" method="POST">
                                                <a name="" id="" class="btn btn-sm btn-info"
                                                    href="{{ route('walas.show', $r->idwali_kelas) }}" role="button">
                                                    Lihat
                                                </a>
                                                <a name="" id="" class="btn btn-sm btn-warning"
                                                    href="{{ route('walas.edit', $r->idwali_kelas) }}" role="button">
                                                    Edit
                                                </a>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="javascript: return confirm('Apakah anda ingin menghapus data wali kelas{{ $r->nama }} ? ')"
                                                    class="btn btn-sm btn-danger">
                                                    Hapus
                                                </button>
                                            </form>
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

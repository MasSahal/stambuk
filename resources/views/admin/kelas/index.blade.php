@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Data Kelas</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Kelas </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <a href="{{ route('kelas.create') }}" class="btn btn-success mt-2 mt-sm-0 btn-icon-text">
                        Tambah Data
                    </a>
                    <a href="{{ route('kelas.index') }}" class="btn btn-info mt-2 mt-sm-0 btn-icon-text">
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
                                    <th>Wali Kelas</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->nama }}</td>
                                        <td>{{ $r->nama_kelas }}</td>
                                        <td>
                                            <form action="{{ route('kelas.destroy', $r->idkelas) }}" method="POST">
                                                <a name="" id="" class="btn btn-sm btn-warning"
                                                    href="{{ route('kelas.edit', $r->idkelas) }}" role="button">
                                                    Edit
                                                </a>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="javascript: return confirm('Apakah anda ingin menghapus data kelas{{ $r->nama_kelas }} ? ')"
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

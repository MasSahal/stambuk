@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Data User</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data User </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <a href="{{ route('pengguna.create') }}" class="btn btn-success mt-2 mt-sm-0 btn-icon-text">
                        Tambah Admin
                    </a>
                    <a href="{{ route('pengguna.create') . '?type=2' }}" class="btn btn-warning mt-2 mt-sm-0 btn-icon-text">
                        Tambah Wali Kelas
                    </a>
                    <a href="{{ route('pengguna.create') . '?type=4' }}"
                        class="btn btn-secondary mt-2 mt-sm-0 btn-icon-text">
                        Tambah Guru Mapel
                    </a>
                    <a href="{{ route('pengguna.index') }}" class="btn btn-info mt-2 mt-sm-0 btn-icon-text">
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
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->email }}</td>
                                        <td>
                                            @if ($r->role == 1)
                                                <span class="badge bg-success">Admin</span>
                                            @elseif($r->role == 2)
                                                <span class="badge bg-warning">Wali Kelas</span>
                                            @elseif($r->role == 3)
                                                <span class="badge bg-primary">Guru Mapel</span>
                                            @elseif($r->role == 0)
                                                <span class="badge bg-secondary">Siswa</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($i != 1)
                                                <form action="{{ route('pengguna.destroy', $r->id) }}" method="POST">
                                                    <a name="" id="" class="btn btn-sm btn-warning"
                                                        href="{{ route('pengguna.edit', $r->id) . '?type=' . $r->role }}"
                                                        role="button">
                                                        Edit
                                                    </a>
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="javascript: return confirm('Apakah anda ingin menghapus data user{{ $r->name }} ? ')"
                                                        class="btn btn-sm btn-danger">
                                                        Hapus
                                                    </button>
                                                </form>
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

@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">{{ $title }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }} </li>
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
                        </div>
                    @endif
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

                    <form action="{{ route('ta.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <h4>Tambah Tahun Ajaran</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="">Tahun Ajaran</label>
                                        <div class="col-md-6">
                                            <input type="number" name="ta_awal" id="" min="2020"
                                                placeholder="Tahun Awal" max="2050"
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="ta_akhir" id="" min="2020"
                                                placeholder="Tahun Akhir" max="2050"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h4>Data Tahun Ajaran</h4>
                    <hr>
                    <div class="table-responsive b-0">
                        <table id="menu" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->ta_awal }} / {{ $r->ta_akhir }}</td>
                                        <td>
                                            @php
                                                if ($r->status == 1) {
                                                    echo 'Tahun Ajaran Baru';
                                                } else {
                                                    echo 'Tahun Ajaran Lama';
                                                }
                                            @endphp
                                        </td>
                                        <td>
                                            @if ($r->status == 1)
                                                <form action="{{ route('ta.destroy', $r->id_ta) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="javascript: return confirm('Apakah anda ingin menghapus data ini ? ')"
                                                        class="btn btn-sm btn-danger">
                                                        Hapus
                                                    </button>
                                                </form>
                                            @else
                                                <a href="#" class="btn btn-secondary btn-sm disabled"
                                                    role="button">Hapus</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

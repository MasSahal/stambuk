@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Kenaikan Kelas</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Kenaikan Kelas</li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                {{-- @if ($ta->semester == 2) --}}
                <div class="card-body">
                    <form action="#" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pilih Kelas</label>
                                    <select class="form-control select2" name="idkelas" id="idkelas">
                                        @foreach ($pilih_kelas as $i => $w)
                                            <option value="{{ $w->idkelas }}" {{ $i == 0 ? 'selected' : '' }}>
                                                Kelas {{ $w->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-group">
                                    <label for="">&nbsp;</label><br>
                                    <button type="submit" class="btn btn-primary btn-lg">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
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

                    @if (count($record) > 0)
                        <h4 class="text-center">Menampilkan Siswa dari Kelas {{ $record[0]->nama_kelas }} - Semester
                            {{ $ta->semester }} - Tahun Ajaran
                            {{ $ta->tahun_ajaran }}</h4>
                    @endif
                    <form action="{{ route('kenaikan.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="table-responsive b-0">
                            <table id="menu" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="max-width: 200px">
                                            Pilih AKsi
                                        </th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($record as $i => $r)
                                        <tr>
                                            <td>
                                                <select name="pilihan[]" id="pilihan[]" class="form-control">
                                                    <option value="0">Tinggal di Kelas {{ $record[0]->nama_kelas }}
                                                    </option>
                                                    @if (in_array($record[0]->nama_kelas, [
                                                            '6A',
                                                            '6B',
                                                            '6C',
                                                            '6D',
                                                            '6E',
                                                            '6F',
                                                            '6G',
                                                            '6H',
                                                            '6I',
                                                            '6J',
                                                            '6K',
                                                            '6L',
                                                            '6M',
                                                            '6N',
                                                            '6O',
                                                            '6P',
                                                            '6Q',
                                                            '6R',
                                                            '6S',
                                                            '6T',
                                                            '6U',
                                                            '6V',
                                                            '6W',
                                                            '6X',
                                                            '6Y',
                                                            '6Z',
                                                        ]))
                                                        <option value="2" selected>Lulus</option>
                                                    @else
                                                        <option value="1" selected>Naik Kelas</option>
                                                    @endif
                                                </select>

                                                <input type="hidden" name="idsiswa[]" value="{{ $r->idsiswa }}">
                                            </td>
                                            <td>{{ $r->no_induk }}</td>
                                            <td>{{ $r->nama_siswa }}</td>
                                            <td>{{ $r->nama_kelas }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Naik ke Kelas</label>
                                    <select class="form-control select2" name="naik_kelas" id="naik_kelas">
                                        @foreach ($pilih_kelas as $i => $w)
                                            <option value="{{ $w->idkelas }}" {{ $i == 0 ? 'selected' : '' }}>
                                                Kelas {{ $w->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger"><strong>Pastikan Kelas yang dipilih sudah
                                            sesuai!</strong></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- @elseif($ta->semester == 1) --}}
                {{-- <div class="card-body">
                        <strong>Perhatian!</strong> Tidak Dapat melaukan kenaikan kelas karena semester 2 belum tuntas!.
                        <br><br>
                <a href="{{ route('kenaikan.index') }}" class="btn btn-secondary">Kembali</a>
            </div> --}}
                {{-- @endif --}}
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

@section('js')
    <script>
        // Get references to the "Check All" checkbox and all the other checkboxes
        const checkAll = document.getElementById('checkAll');
        const checkboxes = document.querySelectorAll('.checkbox');

        // Add a click event listener to the "Check All" checkbox
        checkAll.addEventListener('click', function() {
            // Loop through all checkboxes and set their checked property
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = checkAll.checked;
            });
        });
    </script>
@endsection

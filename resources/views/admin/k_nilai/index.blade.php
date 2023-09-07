@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Data Nilai</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Kriteria Nilai </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <a href="{{ route('k_nilai.create') }}" class="btn btn-success mt-2 mt-sm-0 btn-icon-text">
                        Tambah Data
                    </a>
                    <a href="{{ route('k_nilai.index') }}" class="btn btn-info mt-2 mt-sm-0 btn-icon-text">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pilih Mata Pelajaran</label>
                                <select class="form-control" name="idmapel" id="idmapel"
                                    onchange="getTableKnilai(this.value)">
                                    @foreach ($mapel as $r)
                                        <option value="{{ $r->idmapel }}">{{ $r->nama_mapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="judul"></div>
                    <hr>
                    <div class="table-responsive b-0">
                        <table class="table table-striped" id="data_k_nilai">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kriteria</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

@section('js')
    <script>
        function getTableKnilai(id) {
            $.ajax({
                url: "{{ url('ajax/get_k_nilai') }}",
                data: {
                    idmapel: id
                },
                dataType: 'json',
                success: function(res) {
                    let rows = ``;
                    let mapel = $("#idmapel").find(":selected").text();

                    for (let i = 0; i < res.length; i++) {
                        rows += `<tr><td> ${i+1} </td>
                        <td> ${res[i].kriteria} </td>
                        <td>
                            <a name="" id="" class="btn btn-sm btn-warning" href="{{ url('admin/k_nilai') }}/${res[i].idkriteria}" role="button"> Edit </a>
                            <a name="" id="" class="btn btn-sm btn-danger" href="{{ url('admin/k_nilai') }}/${res[i].idkriteria}/delete" role="button"> Hapus </a>
                            </td></tr>`;
                    };
                    $("#judul").html("<strong>Menampilkan Kriteria Penilaian Mata Pelajaran " + mapel +
                        "</strong>")
                    $('#data_k_nilai tbody').html(rows);
                }
            });
        }
    </script>
@endsection

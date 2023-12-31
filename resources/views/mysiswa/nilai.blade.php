@extends('template.index')


@section('content')
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Nama Siswa</th>
                                    <td>:</td>
                                    <td><?= $record->nama_siswa ?></td>
                                </tr>
                                <tr>
                                    <th>NIS</th>
                                    <td>:</td>
                                    <td><?= $record->nis ?></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>:</td>
                                    <td><?= $record->nama_kelas ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="mt-2">
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-responsive-lg" id="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Mata Pelajaran</th>
                                            <th colspan="3">
                                                Pengetahuan
                                            </th>
                                            <th colspan="3">
                                                Keterampilan
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nilai as $i => $r)
                                            <tr>
                                                <td>{{ $i += 1 }}</td>
                                                <td>@php echo $r->nama_mapel @endphp</td>
                                                <td>@php echo $r->p_nilai @endphp</td>
                                                <td>@php echo $r->p_predikat @endphp</td>
                                                <td>@php echo $r->p_deskripsi @endphp</td>
                                                <td>@php echo $r->k_nilai @endphp</td>
                                                <td>@php echo $r->k_predikat @endphp</td>
                                                <td>@php echo $r->k_deskripsi @endphp</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
@endsection

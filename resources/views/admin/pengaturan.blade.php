@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">{{ $title }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ $title }} </li>
            </ol>
        </nav>
    </div>
    <section class="row">
        <div class="col-md-12">

            @if ($errors->any())
                <div class="card mb-3">
                    <div class="card-s">
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            <ul class="list-ticked">
                                @foreach ($errors->all() as $r)
                                    <li>{{ $r }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="card mb-3">
                    <div class="card-s">
                        <div class="alert alert-light-success color-success  alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="card mb-3">
                    <div class="card-s">
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-6">
            <div class="card mb-3 d-flex flex-column">
                <div class="card-body">
                    <form action="{{ route('set_tahun_ajaran', $record->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h4>Tahun Ajaran Aktif</h4>
                        <hr>
                        <div class="form-group">
                            <label for="">Pilih Tahun Ajaran Saat Ini</label><br>
                            <select class="form-control select2" name="id_ta" id="">
                                @foreach ($records as $k => $v)
                                    <option value="{{ $v->id_ta }}" {{ $v->status == 0 ? 'disabled' : '' }}
                                        {{ $record->id_ta == $v->id_ta ? 'selected' : '' }}>
                                        {{ $v->ta_awal . '/' . $v->ta_akhir }} -
                                        @php
                                            if ($record->id_ta == $v->id_ta) {
                                                echo 'TA Saat Ini';
                                            } else {
                                                if ($v->status == 1) {
                                                    echo 'TA Baru';
                                                } else {
                                                    echo 'TA Lama';
                                                }
                                            }
                                        @endphp
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id_ta_selected" value="{{ $record->id_ta }}">
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                        <a href="{{ route('ta.index') }}" class="btn btn-secondary">Tambah Tahun Ajaran</a>
                    </form>
                </div>
            </div>
        </div>

        @if ($ta->semester == 1)
            {{--  generate button to semester 2 --}}
            <div class="col-md-6">
                <div class="card mb-3 d-flex flex-column">
                    <div class="card-body">
                        <form action="{{ route('genarate_smt2') }}" method="post">
                            @csrf
                            @method('PUT')
                            <h4>Generate Semester 2</h4>
                            <hr>
                            {{-- peringatan teks  --}}
                            <div class="alert border-1" style="background: #ff999999">
                                <strong>Peringatan!</strong> <br>
                                <ul class="list-ticked">
                                    <li>Tindakan ini akan merubah form input penilaian siswa!</li>
                                    <li>Tindakan tidak dapat dibatalkan!</li>
                                </ul>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Generate Semester 2</button>
                        </form>

                    </div>
                </div>
            </div>
        @endif
    </section>
    <div class="viewdata"></div>
@endsection

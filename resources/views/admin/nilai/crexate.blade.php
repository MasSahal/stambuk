@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Tambah Nilai</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Nilai </li>
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
                            <hr>
                        </div>
                    @endif

                    <form action="{{ route('nilai.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pilih Nilai</label>
                                    <select class="form-control select2" name="idnilai" id="idkelas">
                                        @foreach ($nilai as $i => $w)
                                            <option value="{{ $w->idnilai }}" {{ $i == 0 ? 'selected' : '' }}>
                                                Kelas {{ $w->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="k_sikap-tab" data-bs-toggle="tab"
                                    data-bs-target="#k_sikap" type="button" role="tab" aria-controls="k_sikap"
                                    aria-selected="true">Kompetensi Sikap</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                                    type="button" role="tab" aria-controls="messages"
                                    aria-selected="false">Messages</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="k_sikap" role="tabpanel" aria-labelledby="k_sikap-tab"> home
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> profile
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"> messages
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p_predikat">Predikat</label>
                                    <input type="text" name="p_predikat" id="p_predikat" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p_deskripsi">Deskripsi</label>
                                    <input type="number" name="p_deskripsi" id="p_deskripsi" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="k_nilai">Ketrampilan Nilai</label>
                                    <input type="number" name="k_nilai" id="k_nilai" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" name="agama" id="agama" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="number" name="anak_ke" id="anak_ke" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat_siswa">Alamat Siswa</label>
                                    <input type="text" name="alamat_siswa" id="alamat_siswa" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_ortu">Nama Orang Tua</label>
                                    <input type="text" name="nama_ortu" id="nama_ortu" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pekerjaan_ortu"> Pekerjaan Orang Tua</label>
                                    <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat_ortu">Alamat Orang Tua</label>
                                    <input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wali_siswa">Wali Siswa</label>
                                    <input type="text" name="wali_siswa" id="Wali Siswa" class="form-control">
                                </div>
                            </div>

                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

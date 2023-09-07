@extends('template.index')


@section('content')
    <div class="page-header">
        <h3 class="page-title">Tambah Siswa</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Tambah Siswa</li>
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

                    <form action="{{ route('siswa.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            @if (auth()->user()->role == 2)
                                <input type="hidden" name="idkelas" id="idkelas" value="{{ $kelas->idkelas }}">
                            @else
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Pilih Kelas</label>
                                        <select class="form-control select2" name="idkelas" id="idkelas">
                                            @foreach ($kelas as $i => $w)
                                                <option value="{{ $w->idkelas }}" {{ $i == 0 ? 'selected' : '' }}>
                                                    Kelas {{ $w->nama_kelas }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_induk">Nomor Induk Siswa(NIS) - Sekolah</label>
                                    <input type="number" name="no_induk" id="no_induk" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nis">NISN</label>
                                    <input type="number" name="nis" id="nis" class="form-control">
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
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="P">Perempuan</option>
                                        <option value="L">Laki-laki</option>
                                    </select>
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
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pekerjaan_ayah"> Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pekerjaan_ibu"> Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jalan">Jalan</label>
                                    <input type="text" name="jalan" id="jalan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kelurahan_desa">Kelurahan/Desa</label>
                                    <input type="text" name="kelurahan_desa" id="kelurahan_desa"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kecamatan_kota">Kecamatan/Kota</label>
                                    <input type="text" name="kecamatan_kota" id="kecamtan_kota" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kabupaten_kota">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota" id="kabupaten_kota"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" name="provinsi" id="provinsi" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_wali">Nama Wali Siswa</label>
                                    <input type="text" name="nama_wali" id="nama_wali" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat_wali">Alamat Wali Siswa</label>
                                    <input type="text" name="alamat_wali" id="alamat_wali" class="form-control">
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

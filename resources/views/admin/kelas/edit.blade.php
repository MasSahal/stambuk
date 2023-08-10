@extends('template.index')


@section('content')
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
                    <form action="{{ route('kelas.update', $record->idkelas) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Wali Kelas</label>
                            <select class="form-control select2" name="idwali_kelas" id="idwali_kelas">
                                @foreach ($walas as $i => $w)
                                    <option value="{{ $w->idwali_kelas }}"
                                        {{ $w->idwali_kelas == $record->idwali_kelas ? 'selected' : '' }}>
                                        {{ $w->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control"
                                value="{{ $record->nama_kelas }}">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

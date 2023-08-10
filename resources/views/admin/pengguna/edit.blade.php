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

                    <form action="{{ route('pengguna.update', $record->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            @if ($walas)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Wali Kelas</label>
                                        <select class="form-control select2" name="id_join" id="id_join">
                                            @foreach ($walas as $i => $w)
                                                <option value="{{ $w->idwali_kelas }}"
                                                    {{ $w->idwali_kelas == $record->id_join ? 'selected' : '' }}>
                                                    {{ $w->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="role" value="2">
                            @else
                                <input type="hidden" name="role" value="1">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Pengguna</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $record->name }}">
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $record->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>


                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

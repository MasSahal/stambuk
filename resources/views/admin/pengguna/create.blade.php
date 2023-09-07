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

                    <form action="{{ route('pengguna.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            @if ($type == 2)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Wali Kelas</label>
                                        <select class="form-control select2" name="id_join" id="id_join">
                                            @foreach ($record as $i => $w)
                                                <option value="{{ $w->idwali_kelas }}" {{ $i == 0 ? 'selected' : '' }}>
                                                    {{ $w->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="role" value="2">
                            @elseif ($type == 3)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Guru Mapel</label>
                                        <select class="form-control select2" name="id_join" id="id_join">
                                            @foreach ($record as $i => $w)
                                                <option value="{{ $w->id_gurumapel }}">
                                                    {{ $w->nama_guru }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="role" value="4">
                            @else
                                <input type="hidden" name="role" value="1">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Pengguna</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
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
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

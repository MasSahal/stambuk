@extends('template.index')


@section('content')
    <div class="row">
        <div class="col-xl-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-light-success color-success  alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <hr>
                        </div>
                    @endif
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-3">Selamat Datang di STAMBUK!</h1>
                            <p class="lead">Selamat datang di Dashboard Stambuk! Kelola data siswa, pemantauan akademis,
                                kehadiran, prestasi, dan
                                aktivitas
                                ekstrakurikuler dengan mudah dan efisien. Pengalaman pengguna yang intuitif untuk
                                pengelolaan buku
                                induk siswa terpadu
                                yang modern dan terintegrasi. Selamat menggunakan Stambuk!</p>
                            <hr class="my-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

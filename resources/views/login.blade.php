<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Stambuk</title>
    @include('template.header')

    <style>
        body {
            margin-top: 20px;
            background: #f6f9fc;
        }

        .account-block {
            padding: 0;
            background-image: url(https://bootdey.com/img/Content/bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: relative;
        }

        .account-block .overlay {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .account-block .account-testimonial {
            text-align: center;
            color: #fff;
            position: absolute;
            margin: 0 auto;
            padding: 0 1.75rem;
            bottom: 3rem;
            left: 0;
            right: 0;
        }

        .text-theme {
            color: #5369f8 !important;
        }

        .btn-theme {
            background-color: #5369f8;
            border-color: #5369f8;
            color: #fff;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('ui') }}/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="{{ asset('ui') }}/css/demo_1/style.css" />
    <style>
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

        .login-block {
            background: #39628E;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #4F80B4, #39628E);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #4F80B4, #39628E);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float: left;
            width: 100%;
            padding: 50px 0;
        }

        .banner-sec {
            background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;
            background-size: cover;
            min-height: 500px;
            border-radius: 0 10px 10px 0;
            padding: 0;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner {
            border-radius: 0 10px 10px 0;
        }

        .carousel-caption {
            text-align: left;
            left: 5%;
        }

        .login-sec {
            padding: 50px 30px;
            position: relative;
        }

        .login-sec .copy-text {
            position: absolute;
            width: 80%;
            bottom: 20px;
            font-size: 13px;
            text-align: center;
        }

        .login-sec .copy-text i {
            color: #8AC2FE;
        }

        .login-sec .copy-text a {
            color: #355F8B;
        }

        .login-sec h2 {
            margin-bottom: 30px;
            font-weight: 800;
            font-size: 30px;
            color: #355F8B;
        }

        .login-sec h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #8AC2FE;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto
        }

        .banner-text {
            width: 70%;
            position: absolute;
            bottom: 40px;
            padding-left: 20px;
        }

        .banner-text h2 {
            color: #fff;
            font-weight: 600;
        }

        .banner-text h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #FFF;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
        }

        .banner-text p {
            color: #fff;
        }
    </style>
</head>

{{-- <body>
    <div id="main-wrapper pt-5" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>

                                    <h6 class="h5 mb-0">Selamat Datang!</h6>
                                    <p class="text-muted mt-2 mb-5">Masukan username dan password untuk melanjutkan.
                                    </p>

                                    <form action="{{ route('authenticate') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <label for="user">Username/Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            @if ($errors->has('email'))
                                                <small class="text-danger">{{ $errors->first('email') }}
                                                </small>
                                            @endif
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="pass">Password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                            @if ($errors->has('password'))
                                                <small class="text-danger">{{ $errors->first('password') }}
                                                </small>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-theme">Login</button>
                                        <a href="#l" class="forgot-link float-right text-primary">Forgot
                                            password?</a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">This beautiful theme yours!</h4>
                                        <p class="lead text-white">"Best investment i made for a long time. Can only
                                            recommend it for other users."</p>
                                        <p>- Admin User</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>

            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>

</body> --}}


<body>

    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Login STAMBUK</h2>
                    <form action="{{ route('authenticate') }}" method="POST" class="login-form">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="email" class="text-uppercase">Email</label>
                            <input type="text" class="form-control" placeholder="masukan email" name="email">
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}
                                </small>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" placeholder="masukan password" name="password">
                            @if ($errors->has('password'))
                                <small class="text-danger">{{ $errors->first('password') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-check">
                            <button type="submit" class="btn btn-primary float-right">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid"
                                    src="https://images.unsplash.com/photo-1665664660924-255a6167f498?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                                    alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>STAMBUK</h2>
                                        <p>Stambuk adalah solusi inovatif untuk pengelolaan buku induk siswa secara
                                            komprehensif. Dengan integrasi yang kuat, Stambuk memungkinkan pengguna
                                            untuk mengoptimalkan tugas-tugas administratif dalam pendidikan, memberikan
                                            solusi modern untuk pemantauan dan analisis data siswa yang efisien.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid"
                                    src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg"
                                    alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>STAMBUK</h2>
                                        <p>Stambuk adalah solusi inovatif untuk pengelolaan buku induk siswa secara
                                            komprehensif. Dengan integrasi yang kuat, Stambuk memungkinkan pengguna
                                            untuk mengoptimalkan tugas-tugas administratif dalam pendidikan, memberikan
                                            solusi modern untuk pemantauan dan analisis data siswa yang efisien.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>

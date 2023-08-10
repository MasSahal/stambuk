<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title ?? 'STAMBUK' }}</title>

    @include('template.header')
</head>

<body>
    <div class="container-scroller">

        @include('template.sidebar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            @include('template.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper pb-0">

                    @yield('content')

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                                href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->

    </div>



    @include('template.footer')
    @yield('js')

    <!-- End custom js for this page -->
</body>

</html>

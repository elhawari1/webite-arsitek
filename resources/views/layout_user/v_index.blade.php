<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    {{-- <meta content="" name="description">
    <meta content="" name="keywords"> --}}

    {{-- CSS --}}
    @include('asset_user.v_css')
    {{-- End CSS --}}
</head>

<body>
    <a class="wafixed" href="https://wa.me/62823928XXX" target="_blank"><span class="fa-stack fa-lg">
            <i class="fa-brands fa-whatsapp"></i>
        </span></a>
    <!-- ======= Header ======= -->
    @include('layout_user.v_header')
    <!-- End Header -->

    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    @include('layout_user.v_footer')
    <!-- End Footer -->

    {{-- JS --}}
    @include('asset_user.v_js')
    {{-- End JS --}}
</body>

</html>

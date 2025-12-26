<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PT Kreasi Mandiri Pump</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('template_admin/img/Logo_KPM') }}" />
    @include('includes.fe.style')
</head>

<body id="page-top">
    <div class="loader-overlay">
        <div class="loader"></div>
    </div>
    <!-- Navigation-->
    @include('includes.fe.navbar')
    @yield('content')

    <!-- Footer-->
    @include('includes.fe.footer')


    @include('includes.fe.script')
    @yield('script')
</body>

</html>
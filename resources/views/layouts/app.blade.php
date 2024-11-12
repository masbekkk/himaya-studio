<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Photo Studio & Private Cinema | Jatiwaringin | Bekasi | Himaya Photo Studio. </title>
    <meta name="description"
        content="Self Photo Studio & Private Cinema | Jatiwaringin | Bekasi — Express Yourself with Your Unique Style, Whether Single, As a Couple or Even With Your Group. Our Place is Spacious and Comfortable, Include With All-New and Premium Photography Technology Gear. Book Now and Get Promo for FREE 1 Photo!">
    <meta name="keywords" content="Self Photo Studio Jatiwaringin, Sewa Studio dan Fotografer, Bekasi">
    <link rel="icon" href="assets/img/logo-black-small.avif">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') . '?v=' . bin2hex(random_bytes(20)) }}">

    <!-- Montserrat Google Icons -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') . '?v=' . bin2hex(random_bytes(20)) }}">

    <!-- BS icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Import AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @stack('style')
</head>

<body>
    @include('layouts.header')

    @yield('content')
    @include('layouts.footer')

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Import Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    @stack('script')
    <!-- Import Jquery -->
    <!-- <script src="assets/js/jquery-3.7.1.min.js"></script> -->
</body>

</html>

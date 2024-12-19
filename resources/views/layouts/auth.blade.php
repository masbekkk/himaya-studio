<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('image/logo-himaya.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('image/logo-himaya.png') }}" />

    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/auth.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('admin/css/datatable-style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/table-datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/sweetalert2.min.css') }}">
    @yield('style')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: auto;
        }

        #auth {
            height: 100%;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .row.h-100 {
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow-y: auto;
        }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .whatsapp-float {
            pointer-events: auto;
        }

        .whatsapp-float:hover {
            background-color: #1ebe57;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body>
    <script src="{{ asset('admin/js/initTheme.js') }}"></script>


    <div id="auth">
        @include('sweetalert::alert')
        <!-- Start content here -->
        <div class="row h-100">
            @yield('content')
            <div class="footer px-5 mt-auto fixed-bottom">
                @include('admin.layouts.footer')
            </div>
            <!-- End content -->
        </div>
        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/6285817324271" target="_blank" class="whatsapp-float" title="Chat with CS on WhatsApp">
            <i class="fab fa-whatsapp my-float"></i>
        </a>
    </div>

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/dark.js') }}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('admin/js/app.js') }}"></script>

    <script src="{{ asset('admin/js/simple-datatables.js?v=' . bin2hex(random_bytes(20))) }}"></script>

    <script src="{{ asset('admin/js/sweetalert2.min.js') }}"></script>

    <script>
        function togglePasswordVisibility(passwordFieldId, iconId) {
            const passwordField = document.getElementById(passwordFieldId);
            const icon = document.getElementById(iconId);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                passwordField.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>

    @yield('scripts')
</body>

</html>

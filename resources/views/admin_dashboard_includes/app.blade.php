<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-layout-style=""
    data-layout-position="fixed" data-topbar="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Web CMS</title>

    <!-- Favicon and Touch Icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <!-- CSS Libraries -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/material-forms.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/dashboard-custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">


    <!-- Custom Styles -->
    <style>
        .topbar-user {
            background-color: inherit;
        }

        /* loading page */
        .overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background: rgba(255, 255, 255, 0.8) url("loader.gif") center no-repeat;
        }

        /* Turn off scrollbar when body element has the loading class */
        body.loading {
            overflow: hidden;
        }

        /* Make spinner image visible when body element has the loading class */
        body.loading .overlay {
            display: block;
        }
    </style>

    <!-- JS Libraries -->
    <script src="{{ asset('js/layout.js') }}"></script>

    @isset($usevite)
        <!-- Vite for Module Bundling -->
        @vite(['resources/js/app.js'])
    @endisset
</head>

<body>
    <div id="layout-wrapper">
        <!-- Header -->


        @include('admin_dashboard_includes.header')

        <!-- Sidebar -->
        <div class="app-menu navbar-menu">
            <div class="navbar-brand-box">
                <a href="{{ url('/dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('img/tc_logo.png') }}" alt="Logo" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('img/tc_logo.png') }}" alt="Logo" height="60">
                    </span>
                </a>
                <a href="{{ url('/dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('img/tc_logo.png') }}" alt="Logo" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('img/tc_logo.png') }}" alt="Logo" height="60">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <!-- Sidebar Content -->
            <div id="scrollbar">
                <div class="container-fluid">
                    @include('admin_dashboard_includes.slider')
                </div>
            </div>

            <div class="sidebar-background"></div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @include('sweetalert::alert')

                    @yield('content')
                </div>

                <!-- Vue.js Component -->
                <div id="app">
                    <!-- Vue.js Component -->
                </div>

                <!-- Footer -->
                @include('admin_dashboard_includes.footer')
            </div>

            <!-- Back to Top Button -->
            <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
                <i class="ri-arrow-up-line"></i>
            </button>

            <!-- Scripts -->


        </div>
        @include('admin_dashboard_includes.script')
        @yield('scripts')
</body>



</html>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include the Spin.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/spin.js/4.0.0/spin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
</script> --}}
{{-- <script>
    $(document).ready(function() {
        // Show overlay on a button click or an event
        $('#loadButton').on('click', function() {
            $.LoadingOverlay("show");

            // Simulate a delay or perform an AJAX call
            setTimeout(function() {
                $.LoadingOverlay("hide"); // Hide the overlay when done
            }, 3000);
        });
    });
</script> --}}

{{-- <button id="loadButton">Show Loading Spinner</button> --}}

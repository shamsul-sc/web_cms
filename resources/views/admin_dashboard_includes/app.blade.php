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


    {{--
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />




    <!-- Custom Styles -->
    <style>
        .topbar-user {
            background-color: inherit;
        }

        .loader {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            /* display: none; */
            background: #333
                /* Hide by default */
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
            {{-- <div id="scrollbar">
                <div class="container-fluid">
                    <!-- Loader -->
                    <div class="loader"
                        style="display:block; position:fixed; left:50%; top:50%; transform:translate(-50%, -50%); z-index:9999;">
                        <img src="{{ asset('assets/img/logos/loading-svgrepo-com.svg') }}" alt="Loading..."
                            width="100" />
                    </div>

                    <!-- Main Content -->
                    @include('admin_dashboard_includes.slider')
                </div>
            </div> --}}

            <div class="sidebar-background"></div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">


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
            @include('admin_dashboard_includes.script')

        </div>
</body>



</html>
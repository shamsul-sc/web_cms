<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">
    <head>
        <meta charset="utf-8">
        {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Web CMS</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
        <!-- Layout config Js -->
        <script src="{{ asset('js/layout.js') }}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/> --}}
        <!-- Icons Css -->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/material-forms.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- App Css-->
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/dashboard-custom.css') }}" rel="stylesheet" type="text/css"/>

        <style>
            .topbar-user {
                background-color: inherit;
            }
        </style>

        <!-- vite app.js -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{ asset('img/tc_logo.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ asset('img/tc_logo.png') }}" alt="" height="60">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{ asset('img/tc_logo.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ asset('img/tc_logo.png') }}" alt="" height="60">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>

                        <div class="d-flex align-items-center">

                            {{-- <div class="dropdown d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-search fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                                    <i class='bx bx-fullscreen fs-22'></i>
                                </button>
                            </div>
                            <div class="dropdown ms-sm-1 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="{{ asset('img/user-dummy-img.jpg') }}" alt="Header Avatar">

                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="{% url 'logout' %}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('img/tc_logo.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('img/tc_logo.png') }}" alt="" height="60">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('img/tc_logo.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('img/tc_logo.png') }}" alt="" height="60">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{% url 'dashboard' %}">
                                    <i class="ri-dashboard-line"></i> <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{% url 'question_list' %}">
                                    <i class="ri-pages-line"></i> <span data-key="t-qa">Q&A</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i>
                                    <span data-key="t-pages">Machinery</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{% url 'category_list' %}" class="nav-link" data-key="t-category-list"> Category List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarMachineries" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMachineries" data-key="t-Machineries"> Machineries
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarMachineries">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'machinery_list' %}" class="nav-link" data-key="t-Machinery-List">Machinery List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_machinery' %}" class="nav-link" data-key="t-Machinery-Create">Machinery Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSpareParts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSpareParts" data-key="t-Spare-parts"> Spare-parts
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSpareParts">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'spare_part_list' %}" class="nav-link" data-key="t-Spare-parts-List">Spare-parts List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_spare_part' %}" class="nav-link" data-key="t-Spare-parts-Create">Spare-parts Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarWorkforces" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarWorkforces">
                                    <i class="ri-pages-line"></i>
                                    <span data-key="t-Workforces"> Workforces </span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarWorkforces">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#sidebarMechanics" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMechanics" data-key="t-Mechanics"> Mechanics
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarMechanics">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'mechanics_list' %}" class="nav-link" data-key="t-Mechanic-List"> Mechanic List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_mechanics' %}" class="nav-link" data-key="t-Mechanic-Create"> Mechanic Create </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarDriver" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDriver" data-key="t-Driver"> Driver
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarDriver">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'driver_list' %}" class="nav-link" data-key="t-Driver-List">Driver List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_driver' %}" class="nav-link" data-key="t-Driver-Create">Driver Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-services">Services</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">
                                    <i class="ri-pages-line"></i> <span data-key="t-services">Services</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarServices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{% url 'service_type_list' %}" class="nav-link" data-key="t-starter">Service Type List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{% url 'service_list' %}" class="nav-link" data-key="t-starter">Services List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{% url 'create_service' %}" class="nav-link" data-key="t-starter">Services Create</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarOthers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOthers">
                                    <i class="ri-pages-line"></i>
                                    <span data-key="t-Others"> Others </span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarOthers">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#sidebarManufacturer" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarManufacturer" data-key="t-Manufacturer"> Manufacturer
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarManufacturer">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'manufacturer_list' %}" class="nav-link" data-key="t-Manufacturer-List">Manufacturer List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_manufacturer' %}" class="nav-link" data-key="t-Manufacturer-Create">Manufacturer Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarGovFacilities" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarGovFacilities" data-key="t-GovFacilities"> GovFacilities
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarGovFacilities">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'gov_facility_list' %}" class="nav-link" data-key="t-gov-facility-list">Gov Facility List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_gov_facility' %}" class="nav-link" data-key="t-gov-facility-create">Gov Facility Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarVideos" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarVideos" data-key="t-Videos"> YouTube Videos
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarVideos">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'video_list' %}" class="nav-link" data-key="t-video-list">Video List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'entry_video' %}" class="nav-link" data-key="t-video-create">Video Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarContributor" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarContributor" data-key="t-contributor"> Contributor
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarContributor">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{% url 'contributor_list' %}" class="nav-link" data-key="t-Contributor-list">Contributor List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{% url 'create_contributor' %}" class="nav-link" data-key="t-Contributor-create">Contributor Create</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->

            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <div id="app">
                <!-- Main Content Here -->
            </div>

        </div>
        <!-- END layout-wrapper -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        {{-- <div id="preloader">
            <div id="status">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div> --}}

        <!-- JAVASCRIPT -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
        {{-- <script src="{{ asset('js/plugins.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/material-forms.js') }}"></script> --}}

        <!-- projects js -->
        <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('js/app.js') }}"></script>


        {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <script>
            $(document).ready(function() {
                $('#topnav-hamburger-icon').click(function() {
                    $('body').toggleClass('menu');
                });
            });
        </script>

        <!-- TinyMCE -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.9/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'advlist autolink lists link image charmap print preview anchor',
                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                menubar: true
            });
        </script>

    </body>
</html>

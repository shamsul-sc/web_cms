<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-layout="horizontal" data-layout-style=""
    data-layout-position="fixed" data-topbar="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Web CMS</title>

    <!-- Favicon and Touch Icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">

    <!-- CSS Libraries -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/material-forms.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/app.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/dashboard-custom.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">


    
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />




    <!-- Custom Styles -->
    <style>
        .topbar-user {
            background-color: inherit;
        }
    </style>

    <!-- JS Libraries -->
    <script src="<?php echo e(asset('js/layout.js')); ?>"></script>

    <!-- Vite for Module Bundling -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body>
    <div id="layout-wrapper">
        <!-- Header -->
        <?php echo $__env->make('admin_dashboard_includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Sidebar -->
        <div class="app-menu navbar-menu">
            <div class="navbar-brand-box">
                <a href="<?php echo e(url('/dashboard')); ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('img/tc_logo.png')); ?>" alt="Logo" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(asset('img/tc_logo.png')); ?>" alt="Logo" height="60">
                    </span>
                </a>
                <a href="<?php echo e(url('/dashboard')); ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('img/tc_logo.png')); ?>" alt="Logo" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(asset('img/tc_logo.png')); ?>" alt="Logo" height="60">
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
                    <?php echo $__env->make('admin_dashboard_includes.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="sidebar-background"></div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- Footer -->
                
            </div>


        </div>

        <!-- Back to Top Button -->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>

        <!-- Vue.js Component -->
        <div id="app">
            <!-- Vue.js Component -->
        </div>

        <!-- Scripts -->
        <?php echo $__env->make('admin_dashboard_includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>

</html><?php /**PATH E:\LARAVEL\web_cms\resources\views/admin_dashboard_includes/app.blade.php ENDPATH**/ ?>
<!-- about.blade.php -->

@extends('layouts.default')

@section('title', 'About Us | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0" style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10">About Us</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    <div class="row py-2">
        <div class="col">
            <h2 class="text-color-dark font-weight-bold text-10 mb-4"><em>Treatment Community Foundation</em></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <p class="font-weight-bold line-height-9 text-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget.</p>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
        </div>
        <div class="col-lg-4">
            <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">OUR MISSION</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. </p>
            <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">OUR VISION</h3>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida. </p>
        </div>
        <div class="col-lg-4">
            <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">WE HAVE EARNED THE TRUST</h3>
            <p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. </p>
            <ul class="list list-unstyled d-lg-flex d-xl-block align-items-center justify-content-lg-center mb-4">
                <li class="mb-lg-0 mb-xl-3">
                    <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
                    <a href="tel:0123456789" class="text-color-dark text-color-hover-primary font-weight-bold text-decoration-none text-5">(800) 123-4657</a>
                </li>
                <li class="mx-lg-5 mx-xl-0 mb-3 mb-lg-0 mb-xl-3">
                    <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                    <a href="mailto:porto@portotheme.com" class="text-color-dark text-color-hover-primary text-decoration-none text-4">porto@portotheme.com</a>
                </li>
                <li class="text-color-dark text-4 mb-0">
                    <i class="icons icon-calendar text-color-primary text-5 position-relative top-3 me-2"></i>
                    Mon - Fri 9am - 6pm
                </li>
            </ul>
            <ul class="custom-social-icons-style-1 social-icons social-icons-clean">
                <li class="social-icons-instagram">
                    <a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social-icons-twitter mx-4">
                    <a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="social-icons-facebook">
                    <a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container pb-5 my-5">
    <div class="row pb-5 mb-2">
        <div class="col text-center">
            <h2 class="font-weight-medium text-12 mb-0"><em>A History To Be Proud Of</em></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida.</p>
        </div>
    </div>
    <div class="row row-gutter-sm">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 border-radius-0 custom-box-shadow-1">
                <div class="card-body text-center p-4 py-5">
                    <strong class="d-block text-color-primary text-7 mb-2">2016</strong>
                    <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">10000+ Cases</p>
                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 border-radius-0 custom-box-shadow-1">
                <div class="card-body text-center p-4 py-5">
                    <strong class="d-block text-color-primary text-7 mb-2">2017</strong>
                    <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">30+ Employees</p>
                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 border-radius-0 custom-box-shadow-1">
                <div class="card-body text-center p-4 py-5">
                    <strong class="d-block text-color-primary text-7 mb-2">2018</strong>
                    <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">New Office</p>
                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


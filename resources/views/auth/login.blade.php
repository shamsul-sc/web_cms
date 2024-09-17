<!-- about.blade.php -->

@extends('layouts.default')

@section('title', 'About Us | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0"
    style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10">Login</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
            @include('sweetalert::alert')
            <h2 class="font-weight-bold text-5 mb-0">Login</h2>
            <form action="{{ route('auth.login_insert') }}" id="frmSignIn" method="post" class="needs-validation">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">Email or Phone No. <span
                                class="text-color-danger">*</span></label>
                        <input type="text" name="login" value="" class="form-control form-control-lg text-4"
                            placeholder="Email or phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">Password <span
                                class="text-color-danger">*</span></label>
                        <input type="password" name="password" value="" class="form-control form-control-lg text-4"
                            placeholder="Password" required>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="form-group col-md-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember
                                Me</label>
                        </div>
                    </div>
                    <div class="form-group col-md-auto">
                        <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2"
                            href="#">Forgot Password?</a>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <button type="submit"
                            class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
                            data-loading-text="Loading...">Login</button>
                        <div class="divider">
                            <span
                                class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
                        </div>
                        <a href="#"
                            class="btn btn-dark btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3"
                            data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i> Login With
                            Facebook</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@stop
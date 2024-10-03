<!-- about.blade.php -->

@extends('layouts.default')

@section('title', 'Register | Treatment Community Foundation')

@section('content')

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0"
        style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-color-light font-weight-bold text-10">Create New Account</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-0">Login</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid totam sed explicabo voluptatibus tenetur
                    corrupti impedit soluta atque eveniet dolorum suscipit et velit odit alias, reiciendis autem architecto
                    sapiente ut ab eum dicta molestiae a facere. Sit quasi odio maiores?</p>
                {{-- <form action="/" id="frmSignIn" method="post" class="needs-validation">
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">Email address <span
                                class="text-color-danger">*</span></label>
                        <input type="text" value="" class="form-control form-control-lg text-4" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">Password <span
                                class="text-color-danger">*</span></label>
                        <input type="password" value="" class="form-control form-control-lg text-4" required>
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
            </form> --}}
            </div>
            <div class="col-md-6 col-lg-5">
                @include('sweetalert::alert')
                <h2 class="font-weight-bold text-5 mb-0">Register</h2>
                <form action="{{ route('auth.register_insert') }}" id="frmSignUp" method="post">
                    {{ csrf_field() }}
                    <div class="row">

                        {{-- <div class="form-group col">
                        <label for="is_role">User Type</label>
                        <select class="form-select" name="is_role" required>
                            <option value="" disabled>Select Role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="stuff">Stuff</option>
                        </select>

                    </div> --}}
                        <div class="form-group col">
                            <label for="is_role">User Type</label>
                            <select class="form-select" name="is_role" id="is_role" required>
                                <option value="" disabled {{ old('is_role') ? '' : 'selected' }}>Select Role</option>
                                <option value="user" {{ old('is_role') == 'user' ? 'selected' : '' }}>User</option>
                                {{-- <option value="admin" {{ old('is_role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="stuff" {{ old('is_role') == 'stuff' ? 'selected' : '' }}>Stuff</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Name <span
                                    class="text-color-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control form-control-lg text-4" placeholder="Enter your nid name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Email <span
                                    class="text-color-danger">*</span></label>
                            <input type="text" name="email" value="{{ old('email') }}"
                                class="form-control form-control-lg text-4" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Phone Number <span
                                    class="text-color-danger">*</span></label>
                            <input type="text" name="mobile_no" value="{{ old('mobile_no') }}"
                                class="form-control form-control-lg text-4" placeholder="+880" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Password <span
                                    class="text-color-danger">*</span></label>
                            <input type="password" name="password" value=""
                                class="form-control form-control-lg text-4" placeholder="Enter password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Confirm Password <span
                                    class="text-color-danger">*</span></label>
                            <input type="password" name="confirm_password" value=""
                                class="form-control form-control-lg text-4" placeholder="Enter confirm password" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <p class="text-2 mb-2">Your personal data will be used to support your experience throughout
                                this website, to manage access to your account, and for other purposes described in our <a
                                    href="#" class="text-decoration-none">privacy policy.</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit"
                                class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3 loadButton"
                                data-loading-text="Loading...">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop

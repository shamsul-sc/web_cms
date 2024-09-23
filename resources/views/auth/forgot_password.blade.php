<!-- about.blade.php -->

@extends('layouts.default')

@section('title', 'About Us | Treatment Community Foundation')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5 ">
        <div class="card  mt-4">

            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Forgot Password?</h5>
                    <p class="text-muted">Reset password</p>

                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c"
                        class="avatar-xl"></lord-icon>

                </div>

                <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                    Enter your phone and instructions will be sent to you!
                </div>
                <div class="p-2">
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Email">
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-success w-100" type="submit">Send Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="mt-2 p-2 text-center">
            <p class="mb-0">Wait, I remember my password... <a href="{{ route('auth.login') }}"
                    class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
        </div>

    </div>
</div>

@stop

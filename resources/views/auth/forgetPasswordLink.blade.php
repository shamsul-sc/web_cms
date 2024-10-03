@extends('layouts.default')

@section('title', 'Forgot Password | Treatment Community Foundation')

@section('content')

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0"
        style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-color-light font-weight-bold text-10">Reset Password</h1>
                </div>
            </div>
        </div>
    </section>

    <main class="login-form">

        <div class="cotainer">

            <div class="row justify-content-center">

                <div class="col-md-8">
                    @include('sweetalert::alert')
                    <div class="card">

                        <div class="card-header ">

                            <div class="text-center mt-2">
                                <h5 class="text-primary">Reset Password?</h5>

                                <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                    colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

                            </div>
                        </div>
                        <div class="card-body">

                            <form action="" method="POST">
                                @csrf

                                <div class="form-group row">

                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">

                                        <input type="password" id="password" class="form-control" name="password" required
                                            autofocus>

                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                                        Password</label>

                                    <div class="col-md-6">

                                        <input type="password" id="confirm_password" class="form-control"
                                            name="confirm_password" required autofocus>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif

                                    </div>

                                </div>

                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary">

                                        Reset Password

                                    </button>

                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    </div>
    </div>

@stop

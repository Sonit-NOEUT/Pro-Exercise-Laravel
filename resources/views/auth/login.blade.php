@extends('layouts.auth-master')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                     <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>
                            <form method="post" action="{{ route('login.perform') }}">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                @include('layouts.partials.messages')

                                <div class="form-group form-floating mb-3">
                                    <label for="floatingName">Email or Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group form-floating mb-3">
                                    <label for="floatingPassword">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook mr-2 col">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div>
                                <p class="sign-up">Don't have an Account?<a href="{{ route('register.perform') }}"> Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
        <!-- content-wrapper ends -->
            </div>
      <!-- row ends -->
        </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection

@extends('layout')

@section('content')
@include('components.header')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-11 col-lg-8 shadow d-flex p-0">
            <div class="col-5 d-none d-sm-flex">
                <img src="{{ asset('images/login-min.jpg') }}" style="filter: contrast(125%);width: 100%;height: 100%;object-fit: cover" alt="">
            </div>
            <form class="col-sm-7 bg-light rounded-3 d-flex p-5 px-4 px-sm-5 pt-4 pb-3 flex-wrap align-content-center" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12 mb-3 d-flex flex-nowrap align-items-center">
                    <p class="fs-4 text-nowrap">Sign in</p>
                    <a href="https://www.facebook.com/frideestudio" target="_blank" class="btn btn-light p-1 ms-auto rounded-circle border d-flex justify-content-center align-content-center" style="width: 40px;height: 40px">
                        <i class="fa-brands fa-facebook-f d-flex justify-content-center align-items-center text-center align-self-center" style="line-height: inherit;font-size: inherit"></i>
                    </a>
                    <a href="https://www.facebook.com/frideestudio" target="_blank" class="btn btn-light p-1 ms-1 rounded-circle border d-flex justify-content-center align-content-center" style="width: 40px;height: 40px">
                        <i class="fa-brands fa-linkedin-in d-flex justify-content-center align-items-center text-center align-self-center" style="line-height: inherit;font-size: inherit"></i>
                    </a>
                </div>
                <div class="col-12 mb-1">
                    <label for="email" class="fw-bold">Email</label>
                </div>
                <div class="col-12 mb-2">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="col-12 mb-1">
                    <label for="password" class="fw-bold">Password</label>
                </div>
                <div class="col-12 mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-success col-12">Sign in</button>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-check justify-content-between justify-content-sm-center justify-content-md-between d-flex p-0 flex-wrap gap-sm-1 gap-0">
                        <div class="d-flex justify-content-center gap-1">
                            <div class="d-flex">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <label class="form-check-label text-nowrap" for="remember">
                                Remember me
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-hover text-nowrap text-primary">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
                <div class="col-12 d-flex flex-nowrap justify-content-center gap-2">
                    <p class="text-nowrap">Not a member?</p>
                    <a href="{{ route('register') }}" class="text-hover text-primary text-nowrap">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</div>
{{--<div class="container mt-5">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection

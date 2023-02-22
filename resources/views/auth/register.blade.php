@extends('layout')

@section('content')
@include('components.header')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-11 col-lg-8 shadow d-flex p-0">
            <div class="col-5 d-none d-sm-flex">
                <img src="{{ asset('images/login-min.jpg') }}" style="width: 100%;height: 100%;object-fit: cover" alt="">
            </div>
            <form class="col-sm-7 bg-light rounded-3 d-flex p-5 px-4 px-sm-5 pt-4 pb-3 flex-wrap align-content-center" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-12 mb-3 mt-3 d-flex flex-nowrap align-items-center">
                    <p class="fs-4">Sign up</p>
                    <div class="p-1 ms-auto rounded-circle border d-flex justify-content-center align-content-center" style="width: 40px;height: 40px">
                        <i class="fa-brands fa-facebook-f d-flex justify-content-center align-items-center text-center align-self-center" style="line-height: inherit;font-size: inherit"></i>
                    </div>
                    <div class="p-1 ms-1 rounded-circle border d-flex justify-content-center align-content-center" style="width: 40px;height: 40px">
                        <i class="fa-brands fa-linkedin-in d-flex justify-content-center align-items-center text-center align-self-center" style="line-height: inherit;font-size: inherit"></i>
                    </div>
                </div>
                <div class="col-12 mb-1">
                    <label for="name" class="fw-bold">Name</label>
                </div>
                <div class="col-12 mb-2">
                    <input id="name" placeholder="Name" type="text" class="form-control bg-white @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 mb-1">
                    <label for="email" class="fw-bold">Email</label>
                </div>
                <div class="col-12 mb-1">
                    <input id="email" placeholder="Email" type="email" class="form-control bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 mb-1">
                    <label for="password" class="fw-bold">Password</label>
                </div>
                <div class="col-12 mb-1">
                    <input id="password" placeholder="Password" type="password" class="form-control bg-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 mb-1">
                    <label for="password-confirm" class="fw-bold">Confirm password</label>
                </div>
                <div class="col-12 mb-4">
                    <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control bg-white" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-success col-12">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

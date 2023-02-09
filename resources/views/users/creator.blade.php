@extends('layout')

@section('content')
    <div class="col-12 bg-light d-flex align-items-start">
        <div class="p-4 shadow ps-0 d-flex flex-column align-items-start justify-content-center vh-100 gap-5">
            <a href="" class="ps-4 border-start border-5 @if(Route::current()->uri == 'home') border-primary @else border-light text-secondary opacity-75 @endif"><i class="fa-solid fa-home"></i></a>
            <a href="" class="ps-4 border-start border-5 @if(Route::current()->uri == 'video') border-primary @else border-light text-secondary opacity-75 @endif"><i class="fa-solid fa-video"></i></a>
            <a href="" class="ps-4 border-start border-5 @if(Route::current()->uri == 'calendar') border-primary @else border-light text-secondary opacity-75 @endif"><i class="fa-solid fa-calendar-days"></i></a>
            <a href="" class="ps-4 border-start border-5 @if(Route::current()->uri == 'tasks') border-primary @else border-light text-secondary opacity-75 @endif"><i class="fa-solid fa-clipboard-check"></i></a>
            <a href="" class="ps-4 border-start border-5 @if(Route::current()->uri == 'chart') border-primary @else border-light text-secondary opacity-75 @endif"><i class="fa-solid fa-chart-simple"></i></a>
            <a href="" class="ps-4 border-start border-5 @if(Route::current()->uri == 'settings') border-primary @else border-light text-secondary opacity-75 @endif"><i class="fa-solid fa-gear"></i></a>
            <a href="" class="ps-4 border-start border-5 border-light text-secondary opacity-75"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
        <div class="col">
            <div class="col-12 shadow-sm bg-white">
                <div class="px-4 pe-5 py-3 d-flex">
                    <a href="{{ route('welcome') }}" class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('images/f1.png') }}" style="width: 50px" alt="">
                        </div>
                        <div>
                            <p class="fw-bold fs-4" style="font-family: Lobster">ridee</p>
                        </div>
                    </a>
                    <div class="mx-4 vr"></div>
                    <div class="d-flex align-items-center">
                        <p class="fw-bold">{{ ucfirst(Route::current()->uri) }}</p>
                    </div>
                    <div class="ms-auto d-flex align-items-center gap-2">
                        <div class="me-3 d-flex gap-3 ms-3 text-secondary fs-4">
                            <a href="{{ route('home') }}"><i class="fa-regular fa-message"></i></a>
                            <div class="vr"></div>
                            <a href="{{ route('home') }}"><i class="fa-regular fa-bell"></i></a>
                        </div>
                        <a href="{{ route('home') }}" class="d-flex align-items-center">
                            <div class="rounded-2 overflow-hidden me-3">
                                <img src="https://api.dicebear.com/5.x/bottts-neutral/svg?seed={{ Auth::user()->name }}1" style="width: 50px;height: 50px" alt="">
                            </div>
                            <div>
                                <div>
                                    <p class="fw-bold text-center">{{ Auth::user()->name }}</p>
                                </div>
                                <div>
                                    <p class="text-center text-secondary">{{ Auth::user()->typeName() }}</p>
                                </div>
                            </div>
                            <div class="d-flex ms-2 text-secondary fs-4">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-to-bracket"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 p-5">
                <div class="bg-white rounded-3 shadow-sm d-flex p-3">

                </div>
            </div>
        </div>
    </div>
@endsection

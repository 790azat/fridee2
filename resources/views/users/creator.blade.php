@extends('layout')

@section('content')
    @include('components.header')
    <div class="col-12 mt-5">
        <div class="container d-flex p-3 rounded-3 shadow bg-light">
            {{ Auth::user()->name }}
        </div>
    </div>
@endsection

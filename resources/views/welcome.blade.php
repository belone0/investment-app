@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <p style="display: none" class="mt-5 text-center display-2">Welcome to myasset.</p>
            <p class="fs-2 mb-5 text-center">The best place to manage your asset portfolio</p>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row d-flex justify-content-start">
                @include('components.welcome.picture1')
                <p style="width: fit-content;height: fit-content" class="mt-4 text-center fs-2">Keep track
                    of all your favorite assets</p>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <div class="row d-flex justify-content-end">
                @include('components.welcome.picture2')
                <p style="width: fit-content;height: fit-content" class="mt-4 text-center fs-2">Balance your asset portfolio</p>
            </div>
        </div>
        <div class="row">
            <p class="my-5 text-center display-2">Get started today, <br> for free.</p>
        </div>

        <div class="mb-5 row d-flex justify-content-center">
            <a href="{{ route('login') }}" class="col-12 col-md-4 p-3 mt-2 btn btn-outline-primary rounded-pill">Get
                Started</a>
        </div>
@endsection

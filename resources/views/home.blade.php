@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <p class=" text-center display-3 mb-0">Home </p>
        </div>
        <div class="row d-flex justify-content-center gap-4">
            <div class="col-12 col-md-3 card glass mt-4 gap-2" data-tilt data-tilt-max="4" data-tilt-glare data-tilt-max-glare="0.4">
                <a href="{{route('assets.index')}}">
                <div class="card-body ">
                    @include('components.home.picture1')
                    <p class=" text-secondary text-center display-5 mb-0">Assets </p>
                </div>
                </a>
            </div>
            <div class="col-12 col-md-3 card glass mt-4 " data-tilt data-tilt-max="4" data-tilt-glare data-tilt-max-glare="0.4">
                <a href="{{route('portfolio.index')}}">
                    <div class="card-body ">
                        @include('components.home.picture2')
                        <p class="text-secondary text-center display-5 mb-0">Portfolio </p>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection

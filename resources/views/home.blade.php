@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <p class=" text-center display-3 mb-0">Home </p>
        </div>

        <div class="row d-flex justify-content-center gap-4">
            <div class="col-12 col-md-3 card glass mt-4 gap-2 ">
                <div class="card-body ">
                    <a href="{{route('assets.index')}}" class="text-center fs-4 rounded p-3 border border-primary">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        Assets
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 card glass mt-4 ">
                <div class="card-body ">
                    <a href="{{route('assets.index')}}" class="text-center fs-4 rounded p-3 border border-primary">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        Assets
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection

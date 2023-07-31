@extends('layouts.app')

@section('content')
    <div class="container">
        <p class="mt-3 text-primary display-6 ">Hey  {{auth()->user()->name}}! Welcome back</p>
        <div class="card glass mt-4 px-2">
            <div class="card-body ">
                <div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div><div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div><div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div><div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div><div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div><div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div><div class="row">
                <a href="{{route('assets.index')}}" class=" text-center fs-4 rounded col-2 p-3 border border-primary">
                    Portfolio
                </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card glass p-5">
            <div class="card-body">
                <p class=" text-center display-2  mt-5">Portfolio</p>
                <p class=" text-center display-2 fs-4 mb-5">Balance your portfolio</p>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    @if(!auth()->user()->targetPosition())
                        <p>First, chose a target position</p>
                        <form action="">

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

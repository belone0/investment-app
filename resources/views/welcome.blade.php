@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="mt-5 text-primary display-5 ">Welcome to investment-app </p>
        <a href="{{ route('login') }}" class="p-3 mt-2 btn btn-primary rounded-pill">Get Started</a>
    </div>
@endsection

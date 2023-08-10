@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card glass p-5">
            <div class="card-body">
                <p class=" text-center display-2  mt-5">Portfolio</p>
                <p class=" text-center display-2 fs-4 mb-5">Here's your portfolio</p>
            </div>
            <div class="row">
                <p>Total value: {{$portfolio_value}}</p>
                <p>Acoes value: {{$acoes_value}}</p>
                <p>Fiis value: {{$fiis_value}}</p>
                <p>Stocks value: {{$stocks_value}}</p>
                <p>Crypto value: {{$crypto_value}}</p>
            </div>
        </div>
    </div>
@endsection

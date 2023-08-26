@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card glass p-5">
            <div class="card-body ">
                <p class=" text-center display-2  mt-5">Portfolio</p>
                <p class=" text-center display-2 fs-4 mb-5">Balance your portfolio</p>
                @include('components.posicao-form')
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script>
        $('.js-example-basic-single').select2({
            placeholder: 'Selecione um ativo',
            theme: 'bootstrap'
        });
    </script>
@endsection

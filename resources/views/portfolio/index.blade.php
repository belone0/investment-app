@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card glass p-5">
            <div class="card-body ">
                <p class=" text-center display-2  mt-5">Portfolio</p>
                <p class=" text-center display-2 fs-4 mb-5">Balance your portfolio</p>
{{--                TARGET POSITION START--}}
                <div class=" d-flex justify-content-center">
                    <div  class=" col-12 col-md-6 mb-4 ">
                        <p class="text-center h5 mb-3">Informe a divisão desejada para sua carteira (%)</p>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="label col-12 col-md-3">
                                <span>Açoes</span>
                                <input class="form-control" type="number" id="input-posicao-acoes">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Fiis</span>
                                <input class="form-control" type="number" id="input-posicao-fiis">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Stocks</span>
                                <input class="form-control" type="number" id="input-posicao-stocks">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Crypto</span>
                                <input class="form-control" type="number" id="input-posicao-crypto">
                            </div>
                            <button type="button" class="w-25 mt-4 btn btn-outline-primary" id="botao-posicao">asd</button>
                        </div>
                    </div>
                </div>
{{--                TARGET POSITION END--}}
{{--                CURRENT POSITION START--}}
                <div class="mt-5 d-flex justify-content-center d-none">
                    <div  class=" col-12 col-md-6 mb-4 ">
                        <p class="text-center h5 mb-3">Agora, informe os valores atuais da sua carteira</p>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="label col-12 col-md-3">
                                <span>Açoes</span>
                                <input class="form-control"  id="">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Fiis</span>
                                <input class="form-control" id="" >
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Stocks</span>
                                <input class="form-control"  id="">
                            </div>
                            <div class="label col-12 col-md-3" >
                                <span>Crypto</span>
                                <input class="form-control" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        botaoPosicao = document.getElementById('botao-posicao')

        //posicoes
        posicao_acoes = document.getElementById('input-posicao-acoes')
        posicao_fiis = document.getElementById('input-posicao-fiis')
        posicao_stocks = document.getElementById('input-posicao-stocks')
        posicao_crypto = document.getElementById('input-posicao-crypto')
        //posicoes end

        botaoPosicao.addEventListener('click', function (){
            console.log(posicao_acoes.value)
        })
    </script>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card glass p-5">
            <div class="card-body ">
                <p class=" text-center display-2  mt-5">Portfolio</p>
                <p class=" text-center display-2 fs-4 mb-5">Balance your portfolio</p>
                {{--                TARGET POSITION START--}}
                <div class=" d-flex justify-content-center">
                    <div class=" col-12 col-md-6 mb-4 ">
                        <p class="text-center h5 mb-3">Informe a divisão desejada para sua carteira (%)</p>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="label col-12 col-md-3">
                                <span>Açoes</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-acoes">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Fiis</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-fiis">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Stocks</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-stocks">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Crypto</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-crypto">
                            </div>
                            <button type="button" class="w-25 mt-4 btn btn-outline-primary" id="botao-posicao">Próximo
                            </button>
                        </div>
                    </div>
                </div>
                {{--                TARGET POSITION END--}}
                {{--                CURRENT value START--}}
                <div class="mt-5 d-flex justify-content-center d-none" id="value-div">
                    <div class=" col-12 col-md-6 mb-4 ">
                        <p class="text-center h5 mb-3">Agora, informe os valores atuais da sua carteira em R$</p>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="label col-12 col-md-3">
                                <span>Açoes</span>
                                <input class="form-control" id="input-value_acoes">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Fiis</span>
                                <input class="form-control" id="input-value_fiis">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Stocks</span>
                                <input class="form-control" id="input-value_stocks">
                            </div>
                            <div class="label col-12 col-md-3">
                                <span>Crypto</span>
                                <input class="form-control" id="input-value_crypto">
                            </div>
                            <button type="button" class="w-25 mt-4 btn btn-outline-primary" id="botao-balanceamento">Balancear
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //elementos
        const inputElements = document.querySelectorAll(".posicao_inputs");
        const botaoPosicao = document.getElementById('botao-posicao')
        const botaoBalanceamento = document.getElementById('botao-balanceamento')
        const value_div = document.getElementById('value-div')
        //elementos

        //posicoes start
        const posicao_acoes = document.getElementById('input-posicao-acoes')
        const posicao_fiis = document.getElementById('input-posicao-fiis')
        const posicao_stocks = document.getElementById('input-posicao-stocks')
        const posicao_crypto = document.getElementById('input-posicao-crypto')
        //posicoes end

        // values start
        const value_acoes = document.getElementById('input-value-acoes')
        const value_fiis = document.getElementById('input-value-fiis')
        const value_stocks = document.getElementById('input-value-stocks')
        const value_crypto = document.getElementById('input-value-crypto')
        //values start end

        const total_value = 0

        botaoPosicao.addEventListener('click', function () {
            validatePosition()
        })

        function validatePosition(){
            if (checkPositionSum(posicao_acoes, posicao_fiis, posicao_stocks, posicao_crypto)) {
                value_div.classList.remove('d-none')
                inputElements.forEach(function (element) {
                    element.setAttribute('disabled', 'true')
                })
                botaoPosicao.classList.add('d-none')
            } else {
                alert('Preencha a sua divisao de carteira!')
            }
        }

        function checkPositionSum(a, b, c, d) {
            return parseInt(a.value) + parseInt(b.value) + parseInt(c.value) + parseInt(d.value) === 100;
        }

        botaoBalanceamento.addEventListener('click', function () {
            balancePortfolio(value_acoes,value_fiis,value_stocks,value_crypto)
        })

        function balancePortfolio(a,b,c,d){
            let acoes_target_position = parseInt(posicao_acoes.value)
            let fiis_target_position= parseInt(posicao_fiis.value)
            let stocks_target_position= parseInt(posicao_stocks.value)
            let crypto_target_position= parseInt(posicao_crypto.value)

            let acoes_current_value = parseInt(a.value)
            let fiis_current_value = parseInt(b.value)
            let stocks_current_value = parseInt(c.value)
            let crypto_current_value = parseInt(d.value)
            let total_current_value =  acoes_current_value+fiis_current_value+stocks_current_value+crypto_current_value
        }
    </script>
@endsection

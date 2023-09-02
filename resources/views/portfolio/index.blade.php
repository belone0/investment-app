@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card glass p-5">
            <div class="card-body ">
                <p class=" text-center display-2 mt-3">Portfolio</p>
                <p class=" text-center display-2 fs-4 mb-5">Vamos balancear seu portifolio</p>
                {{--                TARGET POSITION START--}}
                <div class=" d-flex justify-content-center" id="position-div">
                    <div class=" col-12 col-md-10 mb-4 ">
                        <p class="text-center h5 mb-3">Primeiro, informe a divisão desejada para sua carteira (%)</p>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="label col-12 col-md-2">
                                <span>Açoes</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-acoes">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Fiis</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-fiis">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Fixa</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-rf">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Stocks</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-stocks">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Crypto</span>
                                <input class="form-control posicao_inputs" type="number" value="0"
                                       id="input-posicao-crypto">
                            </div>
                            <button type="button" class="col-9 col-md-3 mt-4 btn btn-outline-primary"
                                    id="botao-posicao">Próximo
                            </button>
                        </div>
                    </div>
                </div>
                {{--                TARGET POSITION END--}}
                {{--                CURRENT value START--}}
                <div class="mt-5 d-flex justify-content-center d-none" id="value-div">
                    <div class=" col-12 col-md-10 mb-4 ">
                        <p class="text-center h5 mb-3">Agora, informe os valores atuais da sua carteira em R$</p>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="label col-12 col-md-2">
                                <span>Açoes</span>
                                <input class="form-control value_inputs" value="0" id="input-value-acoes">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Fiis</span>
                                <input class="form-control value_inputs" value="0" id="input-value-fiis">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Fixa</span>
                                <input class="form-control value_inputs" value="0" id="input-value-rf">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Stocks</span>
                                <input class="form-control value_inputs" value="0" id="input-value-stocks">
                            </div>
                            <div class="label col-12 col-md-2">
                                <span>Crypto</span>
                                <input class="form-control value_inputs" value="0" id="input-value-crypto">
                            </div>
                            <button type="button" class="col-9 col-md-3 mt-4 btn btn-outline-primary"
                                    id="botao-value">Balancear
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center d-none" id="balance-div">
                    <div class=" col-12 col-md-12 mb-4 ">
                        <p class="text-center h3 mb-3">Aqui está o balanceamento do seu portfolio </p>
                        <p style="color: gray; padding-left: 10%;padding-right: 10%;" class=" text-center  mb-3">Compre
                            ou venda segundo as recomendações abaixo para que sua carteira esteja balanceada de acordo
                            com a posição inserida </p>
                        <div class="row d-flex justify-content-center gap-4">
                            <div class="col-12 col-md-2 card glass mt-4 gap-2" data-tilt data-tilt-max="15"
                                 data-tilt-glare data-tilt-max-glare="100">
                                <div class="card-body ">
                                    @include('components.home.picture1')
                                    <p class=" text-secondary text-center h5 mb-1">Acoes </p>
                                    <p class=" text-center h6 mb-1" id="acoes-card">200</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 card glass mt-4 gap-2" data-tilt data-tilt-max="15"
                                 data-tilt-glare data-tilt-max-glare="100">
                                <div class="card-body ">
                                    @include('components.home.picture1')
                                    <p class=" text-secondary text-center h5 mb-1">Fiis </p>
                                    <p class=" text-center h6 mb-1" id="fiis-card">200 </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 card glass mt-4 gap-2" data-tilt data-tilt-max="15"
                                 data-tilt-glare data-tilt-max-glare="100">
                                <div class="card-body ">
                                    @include('components.home.picture1')
                                    <p class=" text-secondary text-center h5 mb-1">RF </p>
                                    <p class="text-center h6 mb-1" id="rf-card">200</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 card glass mt-4 gap-2" data-tilt data-tilt-max="15"
                                 data-tilt-glare data-tilt-max-glare="100">
                                <div class="card-body ">
                                    @include('components.home.picture1')
                                    <p class=" text-secondary text-center h5 mb-1">Stocks </p>
                                    <p class=" text-center h6 mb-1" id="stocks-card">200</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 card glass mt-4 gap-2" data-tilt data-tilt-max="15"
                                 data-tilt-glare data-tilt-max-glare="100">
                                <div class="card-body ">
                                    @include('components.home.picture1')
                                    <p class=" text-secondary text-center h5 mb-1">Crypto </p>
                                    <p class=" text-center h6 mb-1" id="crypto-card">200</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //elementos
        const inputElements = document.querySelectorAll(".posicao_inputs");
        const valueInputElements = document.querySelectorAll(".value_inputs");
        const botaoPosicao = document.getElementById('botao-posicao')
        const botaoValue = document.getElementById('botao-value')
        const value_div = document.getElementById('value-div')
        //elementos

        //posicoes start
        const posicao_acoes = document.getElementById('input-posicao-acoes')
        const posicao_fiis = document.getElementById('input-posicao-fiis')
        const posicao_stocks = document.getElementById('input-posicao-stocks')
        const posicao_crypto = document.getElementById('input-posicao-crypto')
        const posicao_rf = document.getElementById('input-posicao-rf')
        //posicoes end

        // values start
        const value_acoes = document.getElementById('input-value-acoes')
        const value_fiis = document.getElementById('input-value-fiis')
        const value_stocks = document.getElementById('input-value-stocks')
        const value_crypto = document.getElementById('input-value-crypto')
        const value_rf = document.getElementById('input-value-rf')
        //values start end

        const total_value = 0

        botaoPosicao.addEventListener('click', function () {
            validatePosition()
        })

        function validatePosition() {
            if (checkPositionSum(posicao_acoes, posicao_fiis, posicao_stocks, posicao_crypto, posicao_rf)) {
                value_div.classList.remove('d-none')
                inputElements.forEach(function (element) {
                    element.setAttribute('disabled', 'true')
                })
                botaoPosicao.classList.add('d-none')
            } else {
                alert('Preencha a sua divisao de carteira!')
            }
        }

        function checkPositionSum(a, b, c, d, e) {
            return parseInt(a.value) + parseInt(b.value) + parseInt(c.value) + parseInt(d.value) + parseInt(e.value) === 100;
        }

        botaoValue.addEventListener('click', function () {
            balancePortfolio(value_acoes, value_fiis, value_stocks, value_crypto, value_rf)
        })

        function balancePortfolio(a, b, c, d, e) {
            let acoes_target_position = parseInt(posicao_acoes.value)
            let fiis_target_position = parseInt(posicao_fiis.value)
            let stocks_target_position = parseInt(posicao_stocks.value)
            let crypto_target_position = parseInt(posicao_crypto.value)
            let rf_target_position = parseInt(posicao_rf.value)

            let acoes_current_value = parseInt(a.value)
            let fiis_current_value = parseInt(b.value)
            let stocks_current_value = parseInt(c.value)
            let crypto_current_value = parseInt(d.value)
            let rf_current_value = parseInt(e.value)
            let total_current_value = acoes_current_value + fiis_current_value + stocks_current_value + crypto_current_value + rf_current_value

            let acoes_target_value = getTargetValue(total_current_value, acoes_target_position)
            let fiis_target_value = getTargetValue(total_current_value, fiis_target_position)
            let stocks_target_value = getTargetValue(total_current_value, stocks_target_position)
            let crypto_target_value = getTargetValue(total_current_value, crypto_target_position)
            let rf_target_value = getTargetValue(total_current_value, rf_target_position)

            let acoes_balance_value = Math.floor(acoes_target_value - acoes_current_value)
            let fiis_balance_value = Math.floor(fiis_target_value - fiis_current_value)
            let stocks_balance_value = Math.floor(stocks_target_value - stocks_current_value)
            let crypto_balance_value = Math.floor(crypto_target_value - crypto_current_value)
            let rf_balance_value = Math.floor(rf_target_value - rf_current_value)

            lockValues()
            console.log(acoes_balance_value, fiis_balance_value, stocks_balance_value, crypto_balance_value, rf_balance_value)
            showCards(acoes_balance_value, fiis_balance_value, rf_balance_value, stocks_balance_value, crypto_balance_value,)
        }

        function showCards(a, b, c, d, e) {
            const acoes_card = document.getElementById('acoes-card')
            const fiis_card = document.getElementById('fiis-card')
            const rf_card = document.getElementById('rf-card')
            const stocks_card = document.getElementById('stocks-card')
            const crypto_card = document.getElementById('crypto-card')
            const balanced_div = document.getElementById('balance-div')

            acoes_card.innerText = a
            setCardColorsAndSignal(a, acoes_card)
            fiis_card.innerText = b
            setCardColorsAndSignal(b, fiis_card)
            rf_card.innerText = c
            setCardColorsAndSignal(c, rf_card)
            stocks_card.innerText = d
            setCardColorsAndSignal(d, stocks_card)
            crypto_card.innerText = e
            setCardColorsAndSignal(e, crypto_card)

            balanced_div.classList.remove('d-none')
        }

        function setCardColorsAndSignal(value, card) {
            if (value > 0) {
                card.innerText = `+${card.innerText}`
                card.classList.add('text-primary')
            } else {
                card.classList.add('text-danger');
            }
            card.innerText = `${card.innerText} R$`
        }

        function lockValues(a, b, c, d, e) {
            valueInputElements.forEach(function (element) {
                element.setAttribute('disabled', 'true')
            })
            botaoValue.classList.add('d-none')
        }

        function getTargetValue(total, target_percentage) {
            return (total / 100) * target_percentage;
        }

    </script>
@endsection

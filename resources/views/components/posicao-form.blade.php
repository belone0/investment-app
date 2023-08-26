@if(!auth()->user()->targetPosition())
    <form action="{{ route('position.store') }}" method="POST" class=" col-6 mb-4 ">
        @csrf
        <p class="text-center h5">First, chose a target position (%)</p>
        <div class=" d-flex justify-content-evenly gap-2">
            <div class="label">
                <span>Açoes</span>
                <input class="form-control" name="acoes" type="number">
            </div>
            <div class="label">
                <span>Fiis</span>
                <input class="form-control" name="fiis" type="number">
            </div>
            <div class="label">
                <span>Stocks</span>
                <input class="form-control" name="stocks" type="number">
            </div>
            <div class="label">
                <span>Crypto</span>
                <input class="form-control" name="crypto" type="number">
            </div>
            <input type="hidden" name="type">
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-outline-primary mt-3 " type="submit"><i class="fa-save fa-solid"></i> Salvar</button>
        </div>
    </form>
@endif

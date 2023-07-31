@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="card-body">
                <p class="text-center display-2">Portfolio</p>
                <p class="text-center display-6">My Assets</p>
            </div>
            <div class="row">
                <div class="col-3 p-4 ">
                    <h1 class="text-center mb-3">Crypto</h1>
                    <form action="{{ route('assets.store') }}" method="POST" class="mb-4 d-flex justify-content-evenly">
                        @csrf
                        <select class="w-75 form-select js-example-basic-single" name="code">
                            @foreach(\App\Http\Helpers\AssetIndexHelper::cryptoIndex() as $item)
                                <option data-select2-id="{{$item}}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="type" id="type" value="crypto">
                        <button type="submit" class="btn btn-primary rounded-circle"><i class="fa-solid fa-add"></i></button>
                    </form>
                    @foreach(auth()->user()->assets as $asset)
                        <div class=" mb-3 d-flex justify-content-between">
                            <i class="fs-3 fa-solid fa-coins"></i>
                            <h3 class="">{{$asset->code}}</h3>
                            <form method="POST" action="{{route('assets.destroy',$asset)}}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-danger " title="Remove Asset" onclick="return confirm(&quot;Tem certeza que deseja exluir?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                            </form>                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script>
        $('.js-example-basic-single').select2({
            placeholder: 'cugner',
            theme: 'bootstrap'
        });
    </script>
@endsection

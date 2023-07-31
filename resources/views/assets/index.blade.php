@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="card-body">
                <p class="text-center display-2">Portfolio</p>
                <p class="text-center display-6">My Assets</p>
            </div>
            <div class="row">
                {{--acoes start--}}
                <div class="col-3 p-4 ">
                    <h1 class="text-center mb-3">Ações</h1>
                    <form action="{{ route('assets.store') }}" method="POST" class="mb-4 d-flex justify-content-evenly">
                        @csrf
                        <select class="w-75 form-select js-example-basic-single" name="code">
                            @foreach(\App\Http\Helpers\AssetIndexHelper::acoesIndex() as $item)
                                <option data-select2-id="{{$item}}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="type" id="type" value="acao">
                        <button type="submit" class=" btn"><i class="text-primary fa-solid fa-add"></i>
                        </button>
                    </form>
                    @foreach(auth()->user()->acoes as $asset)
                        <div class=" mb-3 p-1 d-flex justify-content-between">
                            <i class="fs-3 fa-solid fa-coins"></i>
                            <p class="fs-5">{{$asset->code}}</p>
                            <p class="fs-5"><span
                                    style="font-size: 10px">R$</span>{{\App\Http\Helpers\AssetIndexHelper::getAssetInfo($asset)}}
                            </p>
                            <form method="POST" action="{{route('assets.destroy',$asset)}}" accept-charset="UTF-8"
                                  style="display:inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn  "
                                        title="Remove Asset"
                                        onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i
                                        class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
                {{-- acoes end--}}
                {{--fiis start--}}
                <div class="col-3 p-4 ">
                    <h1 class="text-center mb-3">FIIs</h1>
                    <form action="{{ route('assets.store') }}" method="POST" class="mb-4 d-flex justify-content-evenly">
                        @csrf
                        <select class="w-75 form-select js-example-basic-single" name="code">
                            @foreach(\App\Http\Helpers\AssetIndexHelper::fiisIndex() as $item)
                                <option data-select2-id="{{$item}}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="type" id="type" value="fii">
                        <button type="submit" class=" btn"><i class="text-primary fa-solid fa-add"></i>
                        </button>
                    </form>
                    @foreach(auth()->user()->fiis as $asset)
                        <div class=" mb-3 p-1 d-flex justify-content-between">
                            <i class="fs-3 fa-solid fa-coins"></i>
                            <p class="fs-5">{{$asset->code}}</p>
                            <p class="fs-5"><span
                                    style="font-size: 10px">R$</span>{{\App\Http\Helpers\AssetIndexHelper::getAssetInfo($asset)}}
                            </p>
                            <form method="POST" action="{{route('assets.destroy',$asset)}}" accept-charset="UTF-8"
                                  style="display:inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn  "
                                        title="Remove Asset"
                                        onclick="return confirm(&quot;Tem certeza que deseja exluir?&quot;)"><i
                                        class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
                {{-- fiis end--}}
                {{--stocks start--}}
                <div class="col-3 p-4 ">
                    <h1 class="text-center mb-3">Stocks</h1>
                    <form action="{{ route('assets.store') }}" method="POST" class="mb-4 d-flex justify-content-evenly">
                        @csrf
                        <select class="w-75 form-select js-example-basic-single" name="code">
                            @forelse(\App\Http\Helpers\AssetIndexHelper::stocksIndex() as $item)
                                <option data-select2-id="{{$item}}">{{ $item }}</option>
                            @empty
                                <option value="">Ocorreu um erro</option>
                            @endforelse
                        </select>
                        <input type="hidden" name="type" id="type" value="stock">
                        <button type="submit" class=" btn"><i class="text-primary fa-solid fa-add"></i>
                        </button>
                    </form>
                    @foreach(auth()->user()->stocks as $asset)
                        <div class=" mb-3 p-1 d-flex justify-content-between">
                            <i class="fs-3 fa-solid fa-coins"></i>
                            <p class="fs-5">{{$asset->code}}</p>
                            <p class="fs-5"><span
                                    style="font-size: 10px">$</span>{{\App\Http\Helpers\AssetIndexHelper::getAssetInfo($asset)}}
                            </p>
                            <form method="POST" action="{{route('assets.destroy',$asset)}}" accept-charset="UTF-8"
                                  style="display:inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn  "
                                        title="Remove Asset"
                                        onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i
                                        class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
                {{--stocks end--}}
                {{--crypto start--}}
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
                        <button type="submit" class=" btn"><i class="text-primary fa-solid fa-add"></i>
                        </button>
                    </form>
                    @foreach(auth()->user()->crypto as $asset)
                        <div class="p-1  mb-3 d-flex justify-content-between">
                            <img class="me-2" width="30" height="30"
                                 src="{{\App\Http\Helpers\AssetIndexHelper::getAssetInfo($asset)['image']}}" alt="">
                            <p class="fs-5">{{$asset->code}}</p>
                            <p class="fs-5"><span
                                    style="font-size: 10px">R$</span>{{\App\Http\Helpers\AssetIndexHelper::getAssetInfo($asset)['price']}}
                            </p>
                            <form method="POST" action="{{route('assets.destroy',$asset)}}" accept-charset="UTF-8"
                                  style="display:inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn " title="Remove Asset"
                                        onclick="return confirm(&quot;Are you sure you want to delete?&quot;)"><i
                                        class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    @endforeach
                    {{--crypto end--}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script>
        $('.js-example-basic-single').select2({
            placeholder: 'Selecione um ativo',
            theme: 'bootstrap'
        });
    </script>
@endsection

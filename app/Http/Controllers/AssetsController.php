<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AssetIndexHelper;
use App\Http\Requests\AssetRequest;
use App\Models\User;
use App\Models\Asset;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Support\Facades\DB;

class AssetsController extends Controller
{
    public function index()
    {
        return view('assets.index');
    }

    public function create()
    {
        return view('assets.index');
    }

    public function store(AssetRequest $request)
    {
        if (Asset::where([['code', $request['code']], ['user_id', auth()->user()->id],])->exists()) {
            return redirect()->back()->with('message', 'ALREADY EXISTS!');
        }

        try {
            DB::beginTransaction();
            $asset = Asset::create([
                'user_id' => auth()->user()->id,
                'code' => $request['code'],
                'type' => $request['type'],
                'buy_price'=>AssetIndexHelper::getAssetInfo($request['code'])['price']
            ]);

            $asset->save();
            DB::commit();

            return redirect()->back()->with('message', 'IT WORKS!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'IT DOESTN WORK SHIT!');
        }
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->back()->with('message', 'DELETED');
    }

}

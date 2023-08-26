<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AssetIndexHelper;
use App\Http\Requests\PositionRequest;
use App\Models\Position;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    public function store(PositionRequest $request){
        dd($request);
        try {
            DB::beginTransaction();
            $position = Position::create([
                'acoes' => $request->acoes,
                'fiis' => $request->fiis,
                'stocks' => $request->stocks,
                'crypto' => $request->crypto,
                'type' => $request->type,
            ]);
            $position->save();
            DB::commit();

            return redirect()->back();
        } catch (\Throwable $e) {
            dd('eita nois');
        }
    }

}

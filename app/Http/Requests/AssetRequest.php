<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'asset_type'=>'string',
            'asset_code'=>'string',

        ];
    }
}

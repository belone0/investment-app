<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'acoes'=>'float',
            'fiis'=>'float',
            'stocks'=>'float',
            'crypto'=>'float',
            'type'=>'string',
        ];
    }
}

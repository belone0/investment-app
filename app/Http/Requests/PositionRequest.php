<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'acoes'=>'integer',
            'fiis'=>'integer',
            'stocks'=>'integer',
            'crypto'=>'integer',
            'type'=>'string',
        ];
    }
}

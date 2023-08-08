<?php

namespace App\Models;

use App\Http\Helpers\AssetIndexHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'type',
        'buy_price'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function profitOrPrejudiceColor(){
        if($this->buy_price > AssetIndexHelper::getAssetPrice($this->code,$this->type)){
            return 'red';
        }
        if($this->buy_price < AssetIndexHelper::getAssetPrice($this->code,$this->type)){
            return 'green';
        }
        return 'black';
    }

    public function profitOrPrejudiceDifferential(){
        $price = round(AssetIndexHelper::getAssetPrice($this->code,$this->type) -  $this->buy_price, 2);
        if($price > 0){
            return '+'.$price;

        }
        return $price;
    }
}




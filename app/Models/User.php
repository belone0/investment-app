<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Helpers\AssetIndexHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\UserAssetTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, UserAssetTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }

    public function assetIndexByType($type): HasMany
    {
        return $this->hasMany(Asset::class)->where('type', $type);
    }

    public function portfolioValue()
    {
        $value = 0;
        foreach ($this->assets as $asset) {
            $value += AssetIndexHelper::getAssetPrice($asset->code, $asset->type);
        }
        return $value;
    }

    public function assetsValueByType($type)
    {
        $value = 0;
        foreach ($this->assetIndexByType($type)->get() as $asset) {
            $asset_price = AssetIndexHelper::getAssetPrice($asset->code, $asset->type);
            if ($asset->type == 'stock') {
                $asset_price *= AssetIndexHelper::getDolarValueInReais();
            }
            $value += $asset_price;
        }
        return round($value,2);
    }
    
}

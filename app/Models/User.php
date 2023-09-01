<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Controllers\PortfolioController;
use App\Http\Helpers\AssetIndexHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    public function portfolio(){
        return $this->hasOne(Portfolio::class);
    }

    public function targetPosition(){
        return $this->hasOne(Position::class)->first();
    }
//    public function actualPosition(){
//        return $this->hasMany(Position::class)->where('type','actual')->first();
//    }

}

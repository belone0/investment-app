<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //type = target or actual
    protected $fillable = ['user_id','acoes','fiis','stocks','crypto','type'];

}

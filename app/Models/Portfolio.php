<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //type = target or actual
    protected $fillable = ['target_position','actual_position','total_value','user_id'];

}

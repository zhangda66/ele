<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable=["goods_id","amount","user_id"];
}

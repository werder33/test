<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    protected $hidden = ['id','created_at','updated_at'];
    protected $fillable = ['telefon','address','osebe','putdate','user_id','avatar'];
}

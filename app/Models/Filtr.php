<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filtr extends Model
{
    public function role()
    {
        return $this->belongsToMany('App\Models\Project');
    }
}

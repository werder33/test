<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class Page extends Model
{
    protected $table = 'pages';

    public function project()
    {
        return $this->belongsTo('App\Models\Project','project_id');
    }




}

<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected  $fillable = ['level','wall', 'size', 'garage','fundament','room'];
    public function pages()
    {
        return $this->hasMany('App\Models\Page','project_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Filtr');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    public function __construct(){
        if(Auth::check()){
            redirect('/index');
        }
        else {
            redirect('/auth/login');
        }

    }

}

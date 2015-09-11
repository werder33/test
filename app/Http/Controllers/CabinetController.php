<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Cabinet;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Image;


class CabinetController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function getIndex()
    {
        $cabinet = Cabinet::where('user_id', Auth::user() ->id ) -> first();
        if(!$cabinet){
            $cabinet = new Cabinet;
        }

        return View('cabinet.Cabinet')-> with('cabinet' , $cabinet);
    }
    public function postIndex(Requests\CabinetRequest $cab)
    {
        $input = Input::file('photo');


        $cab['user_id'] = Auth::user()->id;
        if (isset($input)){
            $pic =  \App::make('App\libs\Img')->url($input,'/media/img/'.Auth::user() -> id);
            $cab['avatar'] = $pic;
        }

         Cabinet::updateOrCreate(['user_id' => Auth::user() -> id], $cab -> all());
        return redirect("/cabinet");


    }
}

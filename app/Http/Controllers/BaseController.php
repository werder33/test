<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BaseController extends Controller
{
  
public function getIndex(){

	return view('templates.index');
}

public function getStatic($id='about'){
	$text=DB::table('static_contents')->where('url','=',$id)->first();
	return view('templates.static')->with('text',$text);
}


}

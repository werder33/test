<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticContent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BaseController extends Controller
{
  public  function __construct(){
	  parent::__construct();
  }
public function getIndex(){

	return view('templates.index');
}

public function getStatic($id='about'){
	$text=DB::table('static_contents')->where('url','=',$id)->first();
	return view('templates.static')->with('text',$text);
}

public function getNews(){
	$news = StaticContent::paginate(2);
	return View('templates.test')->with('news',$news);
}
}

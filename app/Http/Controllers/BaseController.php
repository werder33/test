<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
  
public function getIndex($id='index'){

	return view('templates.index')->with('id',$id);
}
public function getProject(){
	
	return view('templates.project')->with('name');
}
public function getContact(){
	echo '2';
	return view('templates.contact')->with('name');
}
}

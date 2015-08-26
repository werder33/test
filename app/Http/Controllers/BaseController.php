<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
  
public function index(){
	
	return view('templates.index')->with('name');
}
public function project(){
	
	return view('templates.project')->with('name');
}
public function contact(){
	
	return view('templates.contact')->with('name');
}
}

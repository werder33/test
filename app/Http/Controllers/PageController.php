<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Page;

use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {

           // $projects = Project::with('pages')->where('id','=',$_GET['id'])->get();
        $projects = DB::table('projects') -> where('id','=',$_GET['id']) -> get();
        $pages = DB::table('pages') -> where('project_id','=',$_GET['id'])->get();
        //return $cat[0]['pages'][0]->images;
       return view('templates.page')->with(['projects'=>$projects,'pages' => $pages]);
       // dd($projects);
        //print_r($projects[0]['pages'][0]);
    }

}

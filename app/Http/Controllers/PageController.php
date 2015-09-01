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
        $projects =DB::table('pages')
                                    ->join('projects','pages.project_id','=','projects.id')
                                    ->first();
        $pages = DB::table('pages')->select('images')->get();
       // return view('templates.page')->with('projects',$projects);
        return view('templates.page')->with(['pages'=>$pages,
                                               'projects'=>$projects]);
    }

}

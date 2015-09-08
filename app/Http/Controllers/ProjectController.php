<?php

namespace App\Http\Controllers;

use App\Models\Filtr;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Page;
use Request;
use App\Http\Requests\filtrs;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {


        //  $id = DB::table('projects')->select('id')->get();

        //   $result = Filtr::whereHas('role', function ($q)
        // {
        //  return $q->whereIn('id',[1,2]);
        //  })->select('name')->get();

        //    return $result;}


        $projects = DB::table('projects')->select('title', 'img', 'id')->get();

         return view('templates.project')->with('projects', $projects);



       // return View('templates.project')->with(array('projects' => $projects));
        //  'filtrs'=>$filtrs));


    }

    public function postIndex(filtrs $filtr)
    {

      //Project::create($filtr->all());
    //    return redirect('/');
        //$filtr->input('level');
        $projects = DB::table('projects')->whereBetween('size',array($filtr['size1'],$filtr['size2']))
                                        ->where('level','=',$filtr['level'])
                                        ->where('room','=',$filtr['room'])
                                        ->where('garage','=',$filtr['garage'])
                                        ->where('sauna','=',$filtr['sauna'])->get();

        return View('templates.project')->with(array('projects' => $projects));



    }
}
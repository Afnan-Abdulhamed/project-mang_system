<?php

namespace App\Http\Controllers\Api;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProjectsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
        $projects = Project::where('user_id', $userId)->with('user')->get();
        return ( $projects )? response($projects, 200) : response($projects, 500); 

    }


     /**
     * Display the specified resource.
     *
     * @param  int  $projectId
     * @return \Illuminate\Http\Response
     */
    public function show($projectId)
    {
        $project = Project::find($projectId);
        $project->feature_image = url('/') . str_replace('public','/storage',$project->feature_image);

        return ( $project )? response($project, 200) : response($project, 500); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $projectId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$projectId)
    {
        $project = Project::find($projectId);
        
        $project->name = $request->name;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->confirmed = $request->confirmed;
        $project->description = $request->description;
        $project->feature_image = $request->feature_image;
        $project->type = $request->type;
        $project->theme = $request->theme;
        $project->user_id = $request->user_id;

        $project->save();

        return ( $project )? response($project, 200) : response($project, 500); 
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('user')->get();

        return ( $projects )? response($projects, 200) : response($projects, 500); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.add-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

        $project->name = $request->name;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->confirmed = $request->confirmed;
        $project->description = $request->description;
        $project->feature_image = $request->feature_image;
        $project->type = $request->type;
        $project->theme = $request->theme;
        $project->user_id = $request->user_id;

        $saved = $project->save();
        return ( $saved )? response($project, 201) : response($project, 500); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('templates.read-project');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('templates.edit-project');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleted = Project::destroy($id);

       return ( $deleted )? response($deleted, 200) : response($deleted, 500); 

    }
}

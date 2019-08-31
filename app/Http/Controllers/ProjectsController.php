<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->list();

        return view('admin.projects.list-projects', ['projects' => $projects, 'user' => 'All']);
    }
    

    /**
     * get all projects
     *
     * @return object
     */
    private function list()
    {
        $projects = Project::with('user')->get();
        return ( $projects )? $projects : [];
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // fetch all users
        $users = User::select('id', 'name')->get()->toArray();

        return view('admin.projects.add-project', ['users' => $users]);
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
        
        if($project)
        {
            $project->name = $request->name;
            $project->start_date = $request->start_date;
            $project->end_date = $request->end_date;
            $project->confirmed = $request->confirmed;
            $project->description = $request->description;
            $project->feature_image = ( $request->hasFile('image') )? $request->file('image')->store('/public/projects-images') :  "";
            $project->type = $request->type;
            $project->theme = $request->theme;
            $project->user_id = $request->user;
        }
        $saved = $project->save();

        return ( $saved )? redirect('/projects-manager/admin')->with( ['msg'=>'projectCreated']) : back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with('user')->find($id);
        $project->feature_image = url('/') . str_replace('public','/storage',$project->feature_image);

        return view('admin.projects.read-project', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // fetch all users
        $users = User::select('id', 'name')->get()->toArray();
        $project = Project::with('user')->find($id);
        return view('admin.projects.edit-project', ['project' => $project, 'users'=>$users]);
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

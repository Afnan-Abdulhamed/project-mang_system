<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('projects')->get();

        return view('admin.users.list-users', ['users' => $users]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::with('projects')->find($id);

        return view('admin.users.read-users', ['users' => $users]);
    }


    
    /**
     * List projects related to specific user
     * 
     * @param int $userId
     * @return view
     */
    public function getUserProjects($userId){
        $projects = Project::where('user_id', $userId)->get();
        $userName = User::find($userId)->name;

        return view('admin.projects.list-projects', ['projects' => $projects, 'user'=>$userName]);
    }

}

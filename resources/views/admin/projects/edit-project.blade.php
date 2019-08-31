
@extends('layouts.layout')

@section('content')

    <!-- title -->
    <h2>Edit {{$project->name}}</h2>
    <!-- create form -->
    <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="/projects-manager/admin/projects">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Project Title" name="name" value="{{$project->name}}">
        </div>
        
        <div class="form-group">
            <label for="start-date">Start Date</label>
            <input type="datetime-local" class="form-control" id="start-date" describedby="emailHelp" placeholder="ex 2019-08-12 10:0:0" name="start_date" value="{{$project->start_date}}">
        </div>

        <div class="form-group">
            <label for="end-date">End Date</label>
            <input type="datetime-local" class="form-control" id="end-date" describedby="emailHelp" placeholder="ex 2019-08-12 10:0:0" name="end_date" value="{{$project->end_date}}" >
        </div>

         <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{$project->description}}</textarea>
        </div>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Feature Image</label>
        </div>
        
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="confirmed" name="confirmed">
            <label class="form-check-label" for="confirmed">Confirmed</label>
        </div>

        <select class="custom-select" name="type">
            <option selected>Project Type</option>
            <option value="Website">Website</option>
            <option value="Mobile App">Mobile App</option>
            <option value="Desktop App">Desktop App</option>
        </select>

        <div class="custom-control custom-radio" >
            <input type="radio" id="theme1" name="theme" class="custom-control-input" value="L">
            <label class="custom-control-label" for="theme1">Light Theme</label>
            </div>
            <div class="custom-control custom-radio">
            <input type="radio" id="theme2" name="theme" class="custom-control-input" value="D">
            <label class="custom-control-label" for="theme2">Dark Theme</label>
        </div>

        <select class="custom-select" name="user">
            <option selected>Assign to user</option>
            @foreach ($users as $user)
                <option value="{{$user['id']}}">{{$user['name']}}</option>
            @endforeach
        </select>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>







@endsection
    <!-- <div id="app">
        <app>ssss</app>
    </div> -->
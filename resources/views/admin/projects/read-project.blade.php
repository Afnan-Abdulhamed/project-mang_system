@extends('layouts.layout')

@section('content')

<div class="container">

        <!-- name -->
        @if($project->name)
            <h2>{{$project->name}}</h2>
        @endif

        <!-- img -->
        @if($project->feature_image)
        <div class="proerty-card">
            <img src="{{$project->feature_image}}">
        </div>
        @endif
        <!-- description -->
        @if($project->description)
        <div class="proerty-card">
            <h5>Description</h5>
            <p>{{$project->description}}</p>
        </div>
        @endif
        <!-- user -->
        @if($project->user)
        <div class="proerty-card">
            <h5>Assigned To:</h5>
            <p>{{$project->user->name}}</p>
        </div>
        @endif

        <!-- start date -->
        @if($project->start_date)
        <div class="proerty-card">
            <h5>Start Date:</h5>
            <p>{{$project->start_date}}</p>
        </div>
        @endif

        <!-- end date -->
        @if($project->end_date)
        <div class="proerty-card">
            <h5>End Date:</h5>
            <p>{{$project->end_date}}</p>
        </div>
        @endif
        <!-- type -->
        <!-- end date -->
        @if($project->type)
        <div class="proerty-card">
            <h5>Type:</h5>
            <p>{{$project->type}}</p>
        </div>
        @endif
        <!-- status -->
        <!-- end date -->
        @if($project->confirmed)
        <div class="proerty-card">
            <h5>Status:</h5>
            <p>{{$project->confirmed}}</p>
        </div>
        @endif
        <!-- theme -->
        <!-- end date -->
        @if($project->theme)
        <div class="proerty-card">
            <h5>Theme:</h5>
            <p>{{$project->theme}}</p>
        </div>
        @endif
</div>
   

@endsection
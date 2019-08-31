
@extends('layouts.layout')

@section('content')

    <!-- title -->
    <h2>{{$user}} Projects</h2>
   <div class="box">
        
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Type</th>
                  <th>User</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Actions</th>
                </tr>

                @foreach($projects as $project)
                    <tr>
                        <td> {{$project->id}} </td>
                        <td> {{$project->name}} </td>
                            @php $color = "" @endphp
                            @if( $project->type == 'Website')
                               <?php $color = 'bg-red'?>
                            @elseif( $project->type == 'Mobile App')
                                <?php $color = 'bg-yellow'?>
                            @elseif( $project->type == 'Desktop App')
                                <?php $color = 'bg-green'?>
                            @else
                                <?php $color = 'bg-blue'?>
                            @endif
                        <td><span class="badge {{$color}}">{{$project->type}} </span></td>
                        <td> {{$project->user->name}} </td>
                        <td> {{$project->start_date}} </td>
                        <td> {{$project->end_date}} </td>
                        <td>
                            <span><a href="projects/{{$project->id}}" class="btn btn-success">View</a></span>
                            <span><a href="#" class="btn btn-warning">Edit</a></span>
                            <span><a href="#" class="btn btn-danger">Delete</a></span>
                        </td>
                    </tr>
                @endforeach
               
              </tbody></table>
            </div>
          </div>
@endsection


@extends('layouts.layout')

@section('content')

    <!-- title -->
    <h2>All Users</h2>
   <div class="box">
        
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Email</th>
                  <th>Number of projects</th>
                  <th>Actions</th>
                </tr>

                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                            @php $color = "" @endphp
                            @if( $user->type == 1)
                               <?php $color = 'bg-red'?>
                            @elseif( $user->type == 0)
                                <?php $color = 'bg-yellow'?>
                            @endif
                        <td><span class="badge {{$color}}">{{$user->type}} </span></td>
                        <td> {{$user->email}} </td>
                        <td> {{count($user->projects)}} </td>
                        <td>
                            <span><a href="users/{{$user->id}}/projects" class="btn btn-success">Projects</a></span>
                        </td>
                    </tr>
                @endforeach
               
              </tbody></table>
            </div>
          </div>
@endsection

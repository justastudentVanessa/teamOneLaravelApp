

@extends('layouts.app')

@section('title') Course Table @stop

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> Course  Administration <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
		 <th>Course Name</th> 
                     <th>Address</th> 
 		    <th>City</th> 
 		    <th>State</th> 
 		    <th>Zip</th> 
                     <th>Phone</th> 

                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($courses as $course)
                <tr>
		 <td>{{ $course->coursename }} 
                    <td>{{ $course->address }}</td> 
 		    <td>{{ $course->city }}</td> 
 		    <td>{{ $course->state }}</td> 
 		    <td>{{ $course->zip }}</td> 
                    <td>{{ $course->phone }}</td> 	
                   <td>
                        <a href="/CourseTable/{{ $course->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => '/CourseTable/' . $course->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="/CourseTable/create" class="btn btn-success">Add Course</a>

</div>

@stop


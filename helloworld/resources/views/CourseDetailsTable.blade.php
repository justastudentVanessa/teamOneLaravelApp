@extends('layouts.app')

@section('title') Course Details @stop

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> Course Details <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <!--<thead>
                <tr>
		 <th>Course Name</th> 
                     <th>Address</th> 
 		    <th>City</th> 
 		    <th>State</th> 
 		    <th>Zip</th> 
                     <th>Phone</th> 

                    <th></th>
                </tr>
            </thead>-->

            <tbody>
                @foreach ($details as $details)
                <tr>
		 <td>{{ $details->teecolor }} 
                    <td>{{ $details->yardage }}</td>
 		    <td>{{ $details->handicap }}</td>
 		    <td>{{ $details->par }}</td> 	
                   <td>
                        <a href="/CourseDetails/{{ $details->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => '/CourseDetails/' . $details->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="/CourseDetails/create" class="btn btn-success">Add Course Details</a>

</div>

@stop

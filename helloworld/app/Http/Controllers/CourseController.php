<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use View;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class courseController  extends Controller
{
	//creates a golf course editor

	public function __construct()
        {
	// $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        //      $this->('auth');
        }

        /**
         * Display a listing of the user.
         *
         * @return Response
         */
        public  function index()
        {
                $query = Request::input('q');

		if ($query)
		{		
		    $courses= Course::where('coursename','LIKE', "%$query%")
		    ->orWhere('address','LIKE', "%$query%")
		    ->orWhere('city','LIKE', "%$query%")
	  	    ->orWhere('state','LIKE', "%$query%")
		    ->orWhere('zip', 'LIKE', "%$query%")
		    ->orWhere('phone', 'LIKE', "%$query%")
		    ->get();
		}
		
		else
		{		
		    $courses = Course::all();
		}
                return View::make('CourseTable', ['courses' => $courses]);
        }

        /**
         * Show the form for creating a new user.
         *
         * @return Response
         */
        public function create()
        {
                return View::make('CreateCourse');
        }

        /**
         * Store a newly created user in storage.
         *
         * @return Response
         */
        public function store()
        {
                $course  = new Course;

                $course->coursename = Input::get('coursename');
                $course->address = Input::get('address');
                $course->city = Input::get('city');
                $course->state = Input::get('state');
                $course->zip = Input::get('zip');
                $course->phone = Input::get('phone');

                $course->save();

                return Redirect::to('/CourseTable');
        }

        /**
         * Show the form for editing the specified user.
         *
         * @param  int  $id
         * @return Response
         */

	public function edit($id)
        {
                $course = Course::find($id);

                return View::make('EditCourse', [ 'course' => $course ]);
        }

        /**
         * Update the specified user in storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function update($id)
        {
                $course = Course::find($id);

		$course ->coursename = Input::get('coursename');
                $course->address = Input::get('address');
                $course->city = Input::get('city');
                $course->state = Input::get('state');
                $course->zip = Input::get('zip');
                $course->phone = Input::get('phone');

		 $course->save();

                return Redirect::to('/CourseTable');
        }

        /**
         * Remove the specified user from storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function destroy($id)
        {
                Course::destroy($id);

                return Redirect::to('/CourseTable');
        }



	/*public function map($id)
	{

	$course = Course::find($id);
	$course_name = Course::get('coursename');
	$course_city = Course::get('city');
	$mapurl = "https://maps.googleapis.com/maps/api/staticmap?center={$course->coursename = Course::get('coursename')},{$course->city = Course::get('city')}&zoom=14&size=400x400&key=&zoom=14&size=400x400&key";
		return Redirect::away($mapurl);
//	return $course_name;
//
	}*/
}

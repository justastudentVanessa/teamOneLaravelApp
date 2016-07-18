<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use App\course;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use View;
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
//       $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        //      $this->('auth');
        }

        /**
         * Display a listing of the user.
         *
         * @return Response
         */
        public function index()
        {
                $courses = course::all();


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
                $course  = new course;

                $course->coursename  = Input::get('coursename');
                $course->address   = Input::get('address');
                $course->city      = Input::get('city');
                $course->state      = Input::get('state');
                $course->zip  = Input::get('zip');
                $course->phone  = Input::get('phone');

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
                $course = course::find($id);

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
                $course = course::find($id);

		$course ->coursename  = Input::get('coursename');
                $course->address   = Input::get('address');
                $course->city      = Input::get('city');
                $course->state      = Input::get('state');
                $course->zip  = Input::get('zip');
                $course->phone  = Input::get('phone');

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
                course::destroy($id);

                return Redirect::to('CourseTable');
        }
}
?>

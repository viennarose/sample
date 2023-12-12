<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course()
    {
        $course = Course::orderBy('id')->get();

        return view('course',['course' => $course]);
    }
}

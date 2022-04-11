<?php


namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        // dd($courses);
        return view('course.index', compact('courses'));
    }
}

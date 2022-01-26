<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {

        $courses= Course::with('user')->withCount('episodes')->get();
       
            return Inertia :: render('couses/indesx',[
                'courses'=>$courses
            ]);
    }

    public function show(int $id)
    {
        $course = Course::where('id', $id)->with('episodes')->first();
      

        return Inertia::render('couses/show', [
            'course' => $course
            
        ]);
    }
}

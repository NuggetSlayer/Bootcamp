<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $courses =  Course::join('users', 'courses.user_id', '=', 'users.id')
            ->get();
        return view('home.index', compact('courses'));
    }

    public function course_detail($slug)
    {
        $course = Course::with('user', 'category')
            ->where('courses.slug', $slug)
            ->first();
        $video = Video::where('course_id', $course->id)->get();
        return view('home.course-detail', compact('course','video'));
    }

    public function enroll($id){
        Enrollment::create([
            'user_id' => Auth::id(),
            'course_id' => $id,
        ]);
        return redirect()->back();
    }
}

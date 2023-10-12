<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $courses =  Course::with('user')->get();
        return view('home.index', compact('courses'));
    }


    public function course_detail($slug)
    {
        $course = Course::with('user', 'category')
            ->where('courses.slug', $slug)
            ->first();
        $video = Video::where('course_id', $course->id)->get();
        return view('home.course-detail', compact('course', 'video'));
    }


    public function enroll($id)
    {
        $check = Enrollment::where('user_id', Auth::id())
            ->where('course_id', $id)
            ->first();
        if ($check) {
            return redirect()->back()->with('error', 'You are already enrolled in this course.');
        }
        Enrollment::create([
            'user_id' => Auth::id(),
            'course_id' => $id,
        ]);
        return redirect()->back()->with('success', 'Enrolled Successfuly');
    }


    public function quit($id)
    {
        $enroll = Enrollment::where('course_id', $id)
            ->where('user_id', Auth::id());
        $enroll->delete();

        return redirect()->back()->with('success', 'Quited Successfuly');
    }


    public function courses(Request $request)
    {
        if ($request->search) {
            $courses = Course::where('title', 'like', '%' . $request->input('search') . '%')
            ->with('user')
            ->get();
        } else {
            $courses = Course::all();
        }
        return view('home.courses', compact('courses'));
    }

    public function instructors(){

        $instructor = User::where('role' , 'Instructor')->get();

        return view('home.instructors', compact('instructor') );
    }


}

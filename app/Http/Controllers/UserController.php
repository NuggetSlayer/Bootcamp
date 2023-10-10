<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $courses =  Course::join('users', 'courses.user_id', '=', 'users.id')
        ->join('categories', 'courses.category_id', '=', 'categories.id')
        ->join('languages', 'courses.language_id', '=', 'languages.id')
        ->select('courses.title', 'courses.description', 'categories.name', 'languages.name AS language_name', 'courses.banner', 'courses.slug')
        ->get();
        return view('home.index',compact('courses'));
    }

    public function course_detail($slug){
        $course = Course::join('users', 'courses.user_id', '=', 'users.id')
            ->join('categories', 'courses.category_id', '=', 'categories.id')
            ->join('languages', 'courses.language_id', '=', 'languages.id')
            ->where('courses.slug', $slug)
            ->select('courses.id', 'courses.title', 'courses.description', 'categories.name AS category_name', 'languages.name AS language_name', 'courses.banner', 'courses.slug', 'courses.created_at', 'courses.updated_at', 'users.name')
            ->first();
        $video = Video::where('course_id', $course->id)->get();
        return view('home.course-detail', compact('course', 'video'));
        
    }
    
}

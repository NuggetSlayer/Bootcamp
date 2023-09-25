<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{

    public function index()
    {
        $users  = Course::
            join('users', 'courses.user_id', '=', 'users.id')
            ->join('categories', 'courses.category_id', '=', 'categories.id')
            ->join('languages', 'courses.language_id', '=', 'languages.id')
            ->where('courses.user_id', Auth::id())
            ->select('courses.title', 'courses.description','categories.name', 'languages.name AS language_name')
            ->get();
        return view('instructor.index', compact('users'));
    }


    public function store(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => 'required',
                'category' => 'required',
                'language' => 'required',
                'description' => 'required',
            ]);

            Course::create([
                'user_id' => Auth::id(),
                'category_id' => $request->category,
                'language_id' => $request->language,
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return redirect(route('instructor'));
        }

        else{
            $category  = Category::all();
            $language  = Language::all();
            return view('instructor.form',compact('category','language'));
        }
    }



}

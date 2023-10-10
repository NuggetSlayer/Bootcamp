<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user = User::where('role','User')->count();
        $instructor = User::where('role','Instructor')->count();
        return view('admin.index',compact('user','instructor'));
    }

    public function applicant_list(){
        $applicants = Applicant::all();
        return view('admin.applicant-list', compact('applicants'));
    }

    public function hire($id){
        User::where('id',$id)->update([
            'role' => 'Instructor'
            ]);
        $applicant = Applicant::where('user_id', $id)->first();
        $applicant->delete();

        return redirect()->route('applicants');
    }

    public function reject($id){
        $applicant = Applicant::where('user_id', $id)->first();
        $applicant->delete();
        
        redirect()->route('applicants');
    }

    public function register() {
        return view('admin.register');
    }
}

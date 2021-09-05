<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

class CoursesController extends Controller
{
    public function createCourse(Request $req){
        if($req->session()->has('user')){
            $user = $req->session()->get('user');

            $Course = new Course;

            $Course->name=$req->name;
            $Course->type=$req->type;
            $Course->user_id=$user->id;

            $Course->save();

            return redirect('home');
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewCourses(Request $req){
        if($req->session()->has('user')){
            $user = $req->session()->get('user');

            $query = DB::select("select id, user_id, name, type from courses where user_id!={$user->id}");
            return view('home', ['courses' => $query]);
        }else {
            return redirect('login?error=true');
        }
    }

}

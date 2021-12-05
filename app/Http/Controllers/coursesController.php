<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

class CoursesController extends Controller
{
    public function createCourse(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            $Course = new Course();

            $Course->name = $req->name;
            $Course->type = $req->type;
            $Course->user_id = $user->id;

            $Course->save();

            return redirect('home');
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewCourses(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            $query_courses = DB::select(
                "SELECT DISTINCT c.id, c.user_id, c.name, c.type FROM courses c LEFT JOIN orders o ON o.course_id = c.id WHERE o.course_id IS NULL and c.user_id!={$user->id} or c.user_id!={$user->id} and o.user_id!={$user->id} and o.accepted=0"
            );

            $query_orders = DB::select(
                "SELECT course_id FROM orders WHERE user_id={$user->id} and accepted=0"
            );

            $query = [];
            $exist = false;

            foreach ($query_courses as $qc) {
                $exist = false;
                foreach ($query_orders as $qo) {
                    if ($qc->id == $qo->course_id) {
                        $exist = true;
                    }
                }
                if (!$exist) {
                    array_push($query, $qc);
                }
            }

            return view('home', ['courses' => $query, 'user' => $user]);
        } else {
            return redirect('login?error=true');
        }
    }
}

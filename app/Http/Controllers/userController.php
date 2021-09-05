<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

class UserController extends Controller
{
    public function signup(Request $req){
        $query = DB::select("select email from users where email='{$req->email}'");

        if(count($query) > 0){
            return redirect('signup?error=email_already_taken');
        } else {
            $User = new User;

            $User->email=$req->email;
            $User->full_name=$req->full_name;
            $User->password=$req->password;
            $User->username=$req->username;
            $User->gender=$req->gender;
            $User->univ_number=$req->univ_number;

            $User->save();

            return redirect('/login');
        }
    }

    public function login(Request $req){
        $query = DB::select("select id, full_name, email, password username, univ_number, gender from users where username='{$req->username}' and password='{$req->password}'");

        if(count($query) > 0){
            $req->session()->put('user', $query[0]);
            return redirect('/home');
        } else {
            return redirect('login?error=true');
        }
    }

    public function editProfile(Request $req){
        if($req->session()->has('user')){
            $user = $req->session()->get('user');
            $query = DB::select("update users set full_name='{$req->full_name}', email='{$req->email}', password='{$req->password}', username='{$req->username}', univ_number='{$req->univ_number}', gender='{$req->gender}' where id={$user->id}");
            return redirect('profile');
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewProfile(Request $req){
        if($req->session()->has('user')){
            $user = $req->session()->get('user');
            $query = DB::table("users")->find($user->id);
            return view('profile', ['user' => $query]);
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewEditProfile(Request $req){
        if($req->session()->has('user')){
            $user = $req->session()->get('user');
            $query = DB::table("users")->find($user->id);
            return view('editProfile', ['user' => $query]);
        } else {
            return redirect('login?error=true');
        }
    }
}

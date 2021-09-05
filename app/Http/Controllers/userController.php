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

        if(count($query)){
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

    public function login(Request $req){}

    public function editProfile(Request $req){}

    public function viewProfile(){}
}

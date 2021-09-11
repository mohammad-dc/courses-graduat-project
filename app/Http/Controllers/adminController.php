<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function auth(Request $req){
        // get data from db
        $query = DB::table("admins")->get();
        //split data returned from db as array of object
        $email = $query[0]->email;
        $password = $query[0]->password;

        //get data from client
        $data=$req->input();
        //check if data from client as the same with data from db
        if($data['email'] == $email && $data['password'] == $password){
            $req->session()->put('role', 'admin');
            return redirect('admin');
        }
        else {
            return redirect('admin/login');
        }
    }
}

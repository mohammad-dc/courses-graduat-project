<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function sendMessage(Request $req, $id){
        $Message = new Message;
        $sender = "admin";
        if($req->session()->has('user')){
            $sender = "user";
        }
            $Message->user_id=$id;
            $Message->sender=$sender;
            $Message->message=$req->message;

            $Message->save();
    }

    public function viewMessagesForUser(Request $req){
        if($req->session()->has('user')){
            $user = $req->session()->get('user');
            $query = DB::select("select sender, message from messages where user_id={$user->id}");

            return view('messages', ['messages' => $query]);
        }else {
            return redirect('login?error=true');
        }
    }
    
}
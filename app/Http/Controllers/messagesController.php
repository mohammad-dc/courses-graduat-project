<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function sendMessage(Request $req, $id)
    {
        $Message = new Message();
        $sender = 'admin';
        if ($req->session()->has('user')) {
            $sender = 'user';
        }
        $Message->user_id = $id;
        $Message->sender = $sender;
        $Message->message = $req->message;

        $Message->save();
    }

    public function viewMessagesForUser(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');
            $query = DB::select(
                "select sender, message from messages where user_id={$user->id}"
            );

            return view('messages', ['messages' => $query, 'user' => $user]);
        } else {
            return redirect('login?error=true');
        }
    }

    public function getMessagesSenderForAdmin()
    {
        $query = DB::select(
            "select m.id, m.user_id, m.message, m.created_at, u.full_name from messages as m inner join users as u on m.user_id=u.id where m.sender='user' GROUP BY m.user_id order by created_at desc"
        );
        return view('adminDashboard', ['users' => $query]);
    }
}

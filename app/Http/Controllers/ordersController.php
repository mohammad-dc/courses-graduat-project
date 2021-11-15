<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

class OrdersController extends Controller
{
    public function createOrder(Request $req, $id)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            $Order = new Order();

            $Order->user_id = $user->id;
            $Order->course_id = $id;

            $Order->save();
            return redirect('home');
        } else {
            return redirect('login?error=true');
        }
    }

    public function cancelOrder(Request $req)
    {
    }

    public function acceptOrder(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            DB::select(
                "update orders set accepted=true, bookcase_number={$req->bookcase_number}, bookcase_password={$req->bookcase_password} where id={$req->id}"
            );
            return redirect('orders');
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewMyAcceptedOrders(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            $query = DB::select(
                "select u.full_name as user_fullname, c.name as course_name, c.type as course_type from orders as o inner join users as u on o.user_id=u.id inner join courses as c on o.course_id=c.id where o.accepted=true and o.user_id={$user->id}"
            );
            return view('collection', [
                'collections' => $query,
                'user' => $user,
            ]);
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewAcceptedOrders(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            $query = DB::select(
                "select o.bookcase_password, o.bookcase_number, u.full_name as user_fullname, c.name as course_name, c.type as course_type from orders as o inner join users as u on o.user_id=u.id inner join courses as c on o.course_id=c.id where o.accepted=true and o.user_id={$user->id}"
            );
            return view('notifications', [
                'notifications' => $query,
                'user' => $user,
            ]);
        } else {
            return redirect('login?error=true');
        }
    }

    public function viewMyOrders(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');

            $query = DB::select(
                "select o.id as order_id, u.full_name as user_fullname, c.name as course_name, c.type as course_type from orders as o inner join users as u on o.user_id=u.id inner join courses as c on o.course_id=c.id where o.accepted=false and o.user_id!={$user->id} and c.user_id={$user->id}"
            );
            return view('orders', ['orders' => $query, 'user' => $user]);
        } else {
            return redirect('login?error=true');
        }
    }
}

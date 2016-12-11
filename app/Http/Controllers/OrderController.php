<?php

namespace App\Http\Controllers;

use App\Order as Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::all();

        $data = array(
            'orders'=>$orders
        );
        return view('order',$data);

    }
}

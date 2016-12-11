<?php

namespace App\Http\Controllers;

use App\Customer as Customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function show($id){
        $customer =Customer::find($id);
        //print_r($customer);
        echo 'Hello my name is ', $customer->name . "<br />";
        $orders = $customer->orders;

        foreach($orders as $order){
            echo $order->name . "<br />";
        }
    }

    public function get_customer(){
        $customer = Customer::where('name','=','Tony')->first();
        echo $customer->id;
    }

}

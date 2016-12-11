<?php

use App\User;
/*
models interact with our database
controllers contain our application logic
views contain our designs, layouts that we display to the customer
 */
//routes.php - tells our application where to go for specific routes

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    echo 'welcome to my first laravel project!! :P :P :P :P
    ';
});

Route::get('users',function(){
    return User::all();
});

//Route::get ('hello/{name}', function($name){
  //  echo 'Hello there! :P  '. $name;
//});

//to create an item
Route::post('test',function(){
    echo 'POSTED';
});

//to read an item
Route::get('test',function(){  //whenever you do a request without posting any data it's a get request
    //echo 'GET';
    echo'<form action ="test" method ="POST">';//to create a simple form
    echo'<input type="submit" value="submit">';
    echo'<input type="hidden" name=" _token" value="'. csrf_token().'">'; // security measure in laravel
    echo'<input type="hidden" name="_method" value="PUT">';
    //echo'<input type="hidden" name="_method" value="delete">';
    echo '</form>';
});

//to update an item
Route::put('test',function(){
    echo 'PUT';
});

//to delete an item
Route::delete('test',function(){
    echo 'Deleted';
});

Route::get('test123',function(){});//basically pass it to a function

Route::get('test123','TestController@index');//pass it a controller and we would say which method we want this to go to

Route::get('customer',function(){
    $customer =App\Customer::find(1);
    //print_r($customer);
    echo 'Hello my name is ', $customer->name;
});

Route::get('customers/{id}','CustomerController@show');

/*Route::get('customers/{id}',function($id){
    $customer =App\Customer::find($id);
    //print_r($customer);
    echo 'Hello my name is ', $customer->name . "<br />";
    $orders = $customer->orders;

    foreach($orders as $order){
        echo $order->name . "<br />";
    }
});*/

Route::get('get_customer','CustomerController@get_customer');

/*Route::get('get_customer',function(){
    $customer = App\Customer::where('name','=','Tony')->first();
    echo $customer->id;
});*/

Route::get('mypage',function(){
    $customers = App\Customer::all();
    $data = array(
        'customers'=>$customers
    );
    return view('mypage',$data);
});

Route::get('orders','OrderController@index');

/*Route::get('orders',function(){
    $orders=App\Order::all();

    //foreach ($orders as $order){
       // $customer=App\Customer::find($order->customer_id);
      //  echo $order->name . " ordered by " . $order->customer->name . "<br />";
    //}

    $data = array(
      'orders'=>$orders
    );
    return view('order',$data);
});*/
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('orders')->insert(array(
            'customer_id'=>'1',
            'name'=>'My First Order',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('orders')->insert(array(
            'customer_id'=>'1',
            'name'=>'Awesome Order',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('orders')->insert(array(
            'customer_id'=>'2',
            'name'=>'Bobs first Order',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('orders')->where('name','=','My First Order')->delete();
        DB::table('orders')->where('name','=','Awesome Order')->delete();
        DB::table('orders')->where('name','=','Bobs first Order')->delete();
    }
}

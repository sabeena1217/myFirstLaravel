<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomers extends Migration
{

    public function up()
    {
        DB::table('customers')->insert(array(
            'id'=>'1',
            'name'=>'Tony'
        ));

        DB::table('customers')->insert(array(
            'id'=>'2',
            'name'=>'Bob'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('customers')->where('name','='.'Tony')->delete;
        DB::table('customers')->where('name','='.'Bob')->delete;
    }
}

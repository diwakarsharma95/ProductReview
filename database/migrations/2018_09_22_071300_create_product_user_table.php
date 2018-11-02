<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('product_user', function($table) { 
           $table->increments('id'); 
           $table->integer('user_id'); // foreign key 
           $table->integer('product_id'); // foreign key 
           $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_user');
    }
}

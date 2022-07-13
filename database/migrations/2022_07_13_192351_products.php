<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedInteger('users_id');
            $table->string('name');
            $table->string('description');
            $table->text('body');
            $table->decimal('price',10,2);
            $table->string('slug');
           
            $table->timestamps();
            
            $table->foreign('id')->references('id')->on('stores');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

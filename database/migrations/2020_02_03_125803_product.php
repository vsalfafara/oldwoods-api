<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function(Blueprint $table) {
            $table->string('product_id', 20)->primary();
            $table->string('product_name', 45);
            $table->enum('category', ['Macbook Wood Skin','Macbook Stone Skin','Macbook Wood Case','Macbook Stone Case','iPhone Hard Wood Case','iPhone Wood Case','iPhone Stone Case']);
            $table->integer('price');
            $table->integer('cost');
            $table->integer('stock');
            $table->longText('description')->nullable();;
            $table->string('size', 45);
            $table->enum('type', ['Walnut','Bamboo','Silver Gray','Dark Black']);
            $table->string('photo', 45)->nullable();
            $table->date('date_added')->nullable();;
            $table->integer('login_id');
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

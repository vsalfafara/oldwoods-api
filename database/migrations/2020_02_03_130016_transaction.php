<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function(Blueprint $table) {
            $table->increments('transaction_id', 11);
            $table->date('transaction_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('delivery_address');
            $table->string('delivery_city');
            $table->string('delivery_province');
            $table->enum('mode_of_payment', ['Paymongo CC','Paymongo OTC','BDO','BPI']);
            $table->enum('payment_status', ['Unpaid','Paid']);
            $table->date('paid_date');
            $table->string('payment_ref_num', 45);
            $table->integer('total_price');
            $table->integer('shipping_fee');
            $table->integer('paymongo_fee');
            $table->integer('net_amount');
            $table->enum('shipping_method', ['Pickup','Delivery']);
            $table->date('delivery_date');
            $table->integer('login_id');
            $table->string('shipping_id');
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

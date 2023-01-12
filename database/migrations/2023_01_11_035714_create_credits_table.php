<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->double('total_amount');
            $table->double('partial_amount');
            $table->integer('number_fees');
            $table->date('date_finish');
            $table->date('date_lastpay')->nullable();
            $table->enum('status', ['active', 'pending', 'in_arrears', 'paid_out']);
            $table->double('fees_amount');

            //Foregn Keys
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->unsignedBigInteger('main_id');
            $table->foreign('main_id')->references('id')->on('mains');

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
        Schema::dropIfExists('credits');
    }
};

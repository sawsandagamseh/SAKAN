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
        Schema::create('subscription_bookings', function (Blueprint $table) {
            $table->id();
            
            $table->decimal('price', 10, 2);
            $table->integer('number_days');
            $table->integer('numberOfPosts');

            $table->datetime('start_day');
            $table->datetime('end_day');
            $table->timestamps();
           
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->unsignedBigInteger('sub_id'); // Foreign key to subscriptions table

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sub_id')->references('id')->on('subscriptions')->onDelete('cascade');
        });

      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_bookings');
    }
};

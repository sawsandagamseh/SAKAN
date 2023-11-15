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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->date('duration');
            $table->integer('number_of_days'); // Use integer for whole numbers
            $table->boolean('available')->default(true);
            $table->string('rule1');
            $table->string('rule2');
            $table->decimal('property_1', 10, 2);
            $table->decimal('property_5', 10, 2);
            $table->decimal('property_10', 10, 2);
            $table->decimal('property_20', 10, 2);
            $table->decimal('property_50', 10, 2);
           
            $table->timestamps();
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};

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
        Schema::create('properies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->integer('bath_number');
            $table->integer('room_number');
            $table->integer('carage_number');
            $table->integer('bedroom_number');
            $table->string('age');
            $table->boolean('avaliable');
            $table->string('plane_image')->nullable();
            $table->text('description');
            $table->string('home_area');
            $table->string('location')->nullable();
            $table->string('subscription_booking_id')->nullable(); 

            
            //image
            $table->string('image1'); // Path or URL for the first image
            $table->string('image2')->nullable(); // Path or URL for the second image (nullable)
            $table->string('image3')->nullable(); // Path or URL for the third image (nullable)
            $table->string('image4')->nullable(); // Path or URL for the fourth image (nullable)
            $table->string('image5')->nullable(); // Path or URL for the fifth image (nullable)
            $table->string('image6')->nullable(); // Path or URL for the sixth image (nullable)
            $table->string('image7')->nullable(); // Path or URL for the seventh image (nullable)
            $table->string('image8')->nullable(); // Path or URL for the eighth image (nullable)
            $table->string('image9')->nullable(); // Path or URL for the ninth image (nullable)
            $table->string('image10')->nullable(); // Path or URL for the tenth image (nullable)
            $table->string('viedio')->nullable(); // Path or URL for the tenth image (nullable)
             
            //address
            $table->string('city');
            $table->string('district');
            $table->string('area_name');
            $table->string('area_type');
            $table->timestamps();



              // Define the foreign key constraint for 'category-id' referencing 'id' in 'category' table
              $table->unsignedBigInteger('category_id');
              $table->foreign('category_id')->references('id')->on('categories');
  
              // Define the foreign key constraint for 'user-id'(agent) referencing 'id' in 'agent' table
              $table->unsignedBigInteger('user_id');
              $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properies');
    }
};

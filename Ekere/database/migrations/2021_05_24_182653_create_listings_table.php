<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            // $table->integer('property_id'); 
            $table->enum('operation', ['rent', 'sale'])->default('rent');
            $table->string('headline'); 
            $table->text('description'); 
            $table->text('extra')->default(null); 
            $table->string('video', 45)->nullable(); 
            $table->boolean('status')->default(1);
            $table->string('availability')->default('available');
            $table->integer('created_by'); //The user id who created the listing is stored here. 
            $table->integer('price')->default(0);  
            $table->integer('units')->default(1); 
            $table->bigInteger('views')->default(0);
            $table->boolean('bookable')->default(0);
            $table->integer('position')->default(1);
            $table->boolean('is_verified')->default(0); 
            $table->float('discount_price', 8, 2)->default(null);
            $table->datetime('featured_until')->default(null);
            $table->datetime('last_check')->useCurrent(); // default supposed to be current timestamp
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
        Schema::dropIfExists('listings');
    }
}

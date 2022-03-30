<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_images', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agent_id')->onDelete('casacade');
            $table->string('name');
            $table->string('path');
            $table->string('url');
            $table->string('avatar')->nullable(); 
            $table->string('ID_CARD_Image')->nullable(); 
            $table->string('life_photo')->nullable(); 
            $table->foreign('agent_id')->references('id')->on('agents'); 
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
        Schema::dropIfExists('agent_images');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('phone_number')->nullable()->default(null);
            $table->enum('gender',['male','female','other'])->nullable();
            $table->enum('type',['tenant','landlord','caretaker','admin', 'company']);
            $table->string('avatar')->nullable();           
            $table->enum('status', ['new', 'processing', 'approved', 'suspended']); // 
            $table->string('exact_address');
            $table->text('bio');
            // $table->integer('is_company')->default(0); 
            $table->boolean('is_verified')->default(false);
            $table->dateTime("last_seen")->useCurrent();
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
        Schema::dropIfExists('agents');
    }
}

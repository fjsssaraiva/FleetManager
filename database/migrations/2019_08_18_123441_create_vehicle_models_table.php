<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');  // Model          
			$table->string('photo')->default('pic.jpg');
			$table->string('engine')->default('v8');
			$table->integer('maxpower')->default(500);
			$table->string('fuel')->default('diesel');
			$table->unsignedInteger('author_id');
			
			//cascade
			$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
			
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
        Schema::dropIfExists('vehicle_models');
    }
}

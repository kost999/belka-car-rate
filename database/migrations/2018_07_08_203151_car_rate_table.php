<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('car_rate', function (Blueprint $table) {
			$table->unsignedInteger('car_id');
			$table->unsignedInteger('rate_id');
			$table->decimal('rate_factor');
			$table->foreign('car_id')
				->references('id')
				->on('cars')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreign('rate_id')
				->references('id')
				->on('rates')
				->onUpdate('cascade')
				->onDelete('cascade');
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
		Schema::dropIfExists('car_rate');
    }
}

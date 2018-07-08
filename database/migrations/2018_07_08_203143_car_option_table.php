<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('car_option', function (Blueprint $table) {
			$table->unsignedInteger('car_id');
			$table->unsignedInteger('option_id');
			$table->string('unit');
			$table->decimal('price');
			$table->decimal('max_payment');
			$table->foreign('car_id')
				->references('id')
				->on('cars')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreign('option_id')
				->references('id')
				->on('options')
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
		Schema::dropIfExists('car_option');
    }
}

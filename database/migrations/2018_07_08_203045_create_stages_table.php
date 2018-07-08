<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rate_id');
			$table->string('name');
			$table->decimal('price');
			$table->string('unit');
			$table->timestamp('free_initial_time');
			$table->time('free_initial_start');
			$table->time('free_initial_end');
			$table->decimal('free_initial_mileage');
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
        Schema::dropIfExists('stages');
    }
}

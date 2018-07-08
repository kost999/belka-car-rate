<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeaseStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('lease_stage', function (Blueprint $table) {
			$table->unsignedInteger('lease_id');
			$table->unsignedInteger('stage_id');
			$table->date('stated_at');
			$table->date('ended_at');
			$table->decimal('mileage');
			$table->foreign('lease_id')
				->references('id')
				->on('leases')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreign('stage_id')
				->references('id')
				->on('stages')
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
		Schema::dropIfExists('lease_stage');
    }
}

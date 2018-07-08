<?php

use Illuminate\Database\Seeder;

use App\Models\{
	Rate,
	Stage
};

/**
 * Class RatesSeeder
 */
class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(Rate::class, 3)->create()->each(function (Rate $rate) {
			factory(Stage::class, 5)->create([
				'rate_id' => $rate->id,
			]);
		});
    }
}

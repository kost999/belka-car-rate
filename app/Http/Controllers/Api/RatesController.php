<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\{
	Rate
};
use App\Http\Resources\{
	Rate as RateResource,
	Rates
};

/**
 * Class RatesController
 * @package App\Http\Controllers\Api
 */
class RatesController extends Controller
{
	/**
	 * @return Rates
	 */
    public function list()
	{
		return new Rates(
			Rate::with('stages')->paginate(20)
		);
	}

	/**
	 * @param Rate $rate
	 * @return RateResource
	 */
	public function item(Rate $rate)
	{
		return new RateResource($rate);
	}
}

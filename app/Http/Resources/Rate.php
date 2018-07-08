<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class Rate
 * @package App\Http\Resources
 */
class Rate extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        	'id' => $this->id,
        	'name' => $this->name,
			'max_payment' => $this->max_payment,
			'priority' => $this->priority,
			'max_mileage' => $this->max_mileage,
			'max_mileage_price' => $this->max_mileage_price,
			'stages' => Stage::collection($this->stages),
		];
    }
}

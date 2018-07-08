<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Stage extends JsonResource
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
			'rate_id' => $this->rate_id,
			'name' => $this->name,
			'price' => $this->price,
			'unit' => $this->unit,
			'free_initial_minutes' => $this->free_initial_minutes,
			'free_time_start' => $this->free_time_start,
			'free_time_end' => $this->free_time_end,
			'free_initial_mileage' => $this->free_initial_mileage,
		];
    }
}

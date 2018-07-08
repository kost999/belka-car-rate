<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\{
	BelongsTo,
	BelongsToMany
};

/**
 * Class Lease
 * @package App\Models
 */
class Lease extends BaseModel
{
	/**
	 * @return BelongsTo
	 */
    public function car(): BelongsTo
	{
		return $this->belongsTo(Car::class);
	}

	/**
	 * @return BelongsToMany
	 */
	public function stages(): BelongsToMany
	{
		return $this->belongsToMany(Stage::class);
	}
}

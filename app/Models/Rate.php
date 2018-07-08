<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\{
	BelongsToMany,
	HasMany
};

/**
 * Class Rate
 * @package App\Models
 */
class Rate extends BaseModel
{
	/**
	 * @return BelongsToMany
	 */
	public function cars(): BelongsToMany
	{
		return $this->belongsToMany(Car::class);
	}

	/**
	 * @return HasMany
	 */
	public function stages(): HasMany
	{
		return $this->hasMany(Stage::class);
	}
}

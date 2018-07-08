<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\{
	BelongsToMany,
	HasMany
};

/**
 * Class Car
 * @package App\Models
 */
class Car extends BaseModel
{
	/**
	 * @return BelongsToMany
	 */
	public function options(): BelongsToMany
	{
		return $this->belongsToMany(Option::class);
	}

	/**
	 * @return BelongsToMany
	 */
	public function rates(): BelongsToMany
	{
		return $this->belongsToMany(Rate::class);
	}

	/**
	 * @return HasMany
	 */
	public function leases(): HasMany
	{
		return $this->hasMany(Lease::class);
	}
}

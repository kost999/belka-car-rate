<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\{
	BelongsTo,
	BelongsToMany
};

/**
 * Class Stage
 * @package App\Models
 */
class Stage extends BaseModel
{
	/**
	 * @return BelongsTo
	 */
    public function rate(): BelongsTo
	{
		return $this->belongsTo(Rate::class);
	}

	/**
	 * @return BelongsToMany
	 */
	public function leases(): BelongsToMany
	{
		return $this->belongsToMany(Lease::class);
	}
}

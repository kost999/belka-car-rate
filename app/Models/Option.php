<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Option
 * @package App\Models
 */
class Option extends BaseModel
{
	/**
	 * @return BelongsToMany
	 */
    public function cars(): BelongsToMany
	{
		return $this->belongsToMany(Car::class);
	}
}

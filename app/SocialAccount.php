<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
	protected $table = 'social_accounts';

	protected $fillable = [
			'user_id',
			'provider_user_id',
			'provider',
	];

	/**
	 * Social Login belongs to User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
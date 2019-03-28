<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	protected $fillable = [ 'user_id', 'status', 'total' ];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'user_id');
	}
}

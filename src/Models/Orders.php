<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Orders extends Model
{
	protected $fillable = [ 'user_id', 'order_id', 'status', 'total' ];

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function items()
	{
		return $this->hasMany(OrderItems::class, 'order_id', 'id');
	}
}

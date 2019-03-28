<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class WishList extends Model
{
	protected $fillable = [ 'user_id', 'product_id' ];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'user_id');
	}

	public function product()
	{
		return $this->belongsTo(Products::class, 'id', 'product_id');
	}
}

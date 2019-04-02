<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ShoppingCart extends Model
{
	protected $fillable = [ 'user_id', 'product_id', 'quantity' ];
	protected $table = 'shopping_cart';

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function product()
	{
		return $this->belongsTo(Products::class, 'product_id', 'id');
	}
}

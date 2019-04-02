<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
	protected $fillable = [ 'order_id', 'product_id', 'quantity' ];

	public function order()
	{
		return $this->belongsTo(Orders::class, 'order_id', 'id');
	}

	public function product()
	{
		return $this->belongsTo(Products::class, 'product_id', 'id');
	}
}

<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
	protected $fillable = [ 'name', 'description' ];

	public function products()
	{
		return $this->hasMany(Products::class, 'category_id', 'id');
	}
}

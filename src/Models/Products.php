<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable = [ 'category_id', 'name', 'description', 'entity', 'entity_id', 'entity_data', 'image', 'image_type', 'price', 'discount_rate', 'rating' ];

	public function category()
	{
		return $this->belongsTo(ProductCategories::class, 'id', 'category_id');
	}

	public function product_entity()
	{
		return $this->belongsTo($this->entity, 'id', 'entity_id');
	}
}

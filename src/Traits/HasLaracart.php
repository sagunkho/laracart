<?php

namespace SagunKho\Laracart\Traits;

use SagunKho\Laracart\Models\ShoppingCart;

trait HasLaracart
{
	public function shopping_cart()
	{
		return $this->hasMany(ShoppingCart::class, 'user_id', 'id');
	}
}

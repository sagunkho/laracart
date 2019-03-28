<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;

class LogWallets extends Model
{
	protected $fillable = [ 'user_id', 'wallet_id', 'balance', 'transaction', 'cause_entity_id', 'cause_entity' ];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'user_id');
	}

	public function wallet()
	{
		return $this->belongsTo(Wallets::class, 'id', 'wallet_id');
	}

	public function cause_entity()
	{
		return $this->belongsTo($this->cause_entity, 'id', 'cause_entity_id');
	}
}

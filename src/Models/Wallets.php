<?php

namespace SagunKho\Laracart\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Wallets extends Model
{
	protected $fillable = [ 'user_id', 'balance' ];

	public function user()
	{
		return $this->belongsTo(User::class, 'id', 'user_id');
	}

	public function logs()
	{
		return $this->hasMany(LogWallets::class, 'wallet_id', 'id');
	}
}

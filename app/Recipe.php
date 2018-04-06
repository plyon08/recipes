<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	protected $guarded = [];

	public function scopeTags($query,$tag) {
		return $query->where('tags','like',$tag);
	}
}

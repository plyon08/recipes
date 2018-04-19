<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	protected $fillable = [
		'userID',
		'recipeName',
		'ingredient1',
		'ingredient2',
		'ingredient3',
		'ingredient4',
		'ingredient5',
		'ingredient6',
		'ingredient7',
		'ingredient8',
		'ingredient9',
		'ingredient10',
		'ingredient11',
		'ingredient12',
		'ingredient13',
		'ingredient14',
		'ingredient15',
		'instruction1',
		'instruction2',
		'instruction3',
		'instruction4',
		'instruction5',
		'instruction6',
		'instruction7',
		'instruction8',
		'instruction9',
		'instruction10',
		'instruction11',
		'instruction12',
		'instruction13',
		'instruction14',
		'instruction15',
		'image',
		'tag'
	];

	public function scopeTag($query,$tag,$userID)
	{
		return $query->where([['tag',$tag],['userID',$userID]]);
	}

}

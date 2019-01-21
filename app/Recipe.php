<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'userID',
        'recipeName',
        'ingredients',
        'instructions',
        'image',
        'tag'
    ];

    public function scopeTag($query, $tag, $userID)
    {
        return $query->where([['tag',$tag],['userID',$userID]]);
    }
}

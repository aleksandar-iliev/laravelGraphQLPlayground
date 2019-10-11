<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Each Game can be favorited multiple times.
     *
     * @return App\Models\Favorite
     */
    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite', 'game_id')->orderBy('created_at', 'DESC');
    }
}

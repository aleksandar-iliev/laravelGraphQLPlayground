<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'game_id'
    ];

    /**
     * Each Favorite belongs to a User.
     *
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Each Favorite is of one Game.
     *
     * @return App\Models\Game
     */
    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }
}

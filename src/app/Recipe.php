<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'recipes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'title', 'sentence',
    ];
}

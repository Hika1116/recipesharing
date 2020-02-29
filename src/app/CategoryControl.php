<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryControl extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'categorycontrol';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipe_id','category_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryInfo extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'categoryinfo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipe_id','categorycontrol_id','category_id','category_name'
    ];
}

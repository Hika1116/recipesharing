<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipesProcess extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipe_id', 'recipe_order', 'process_text',
    ];
}

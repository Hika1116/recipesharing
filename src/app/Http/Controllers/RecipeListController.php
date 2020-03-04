<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeListController extends Controller
{
    public function index(){
        $recipeInfo = new RecipeInfo();
        $recipeInfo->title = 'Recipe1';
        $recipeInfo->context = 'this is first recipe.';

        $result = array(
            "recipeInfo"=>$recipeInfo
        );

        return view('pages.recipe_list', $result);
    }
}

class RecipeInfo {
    public $title;
    public $context;
}

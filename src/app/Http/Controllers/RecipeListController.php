<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Entitys\RecipeCardInfo;
use App\Models\CategoryInfo;

class RecipeListController extends Controller
{
    public function index(){

        $recipes = Recipe::all();

        // $categoryinfo = CategoryInfo::all();
        // Log::debug(gettype($categoryinfo));

        $categoryInfo = CategoryInfo::all();

        Log::debug(count($categoryInfo));
        Log::debug($categoryInfo[0]->category_name);
        Log::debug(dd($categoryInfo));

        $recipe_list = [];
        foreach($recipes as $recipe){
            $recipe_element = new RecipeCardInfo();
            
            $recipe_element->user_info = $recipe->user;
            $recipe_element->recipe_info = $recipe;

            $recipe_element->categorys = $recipe->categoryControl;
            $recipe_element->materials = [];
            $recipe_list[] = $recipe_element;
        }

    
        $result = array(
            "recipe_list"=>$recipe_list
        );

        return view('pages.recipe_list', $result);
    }
}

class RecipeInfo {
    public $title;
    public $context;
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Entitys\RecipeCardInfo;

class RecipeListController extends Controller
{
    public function index(){

        $recipes = Recipe::all();

        $recipe_list = [];
        foreach($recipes as $recipe){
            $recipe_element = new RecipeCardInfo();
            
            $recipe_element->user_info = $recipe->user;
            $recipe_element->recipe_info = $recipe;
            $recipe_element->categorys = $recipe->categoryInfos;
            $recipe_list[] = $recipe_element;
        }

        Log::debug("title:".$recipe_list[0]->recipe_info->title);
        Log::debug("category_name:".$recipe_list[1]->categorys[1]->category_name);

        return view('pages.recipe_list')->with('recipe_list', json_encode($recipe_list, JSON_PRETTY_PRINT));
    }
}

class RecipeInfo {
    public $title;
    public $context;
}

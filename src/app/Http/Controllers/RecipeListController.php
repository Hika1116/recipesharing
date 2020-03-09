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

        $categoryInfo = CategoryInfo::all();

        // Log::debug(count($categoryInfo));
        // Log::debug($categoryInfo[0]->category_name);
        // Log::debug(dd($categoryInfo));

        $recipe_list = [];
        foreach($recipes as $recipe){
            $recipe_element = new RecipeCardInfo();
            
            $recipe_element->user_info = $recipe->user;
            $recipe_element->recipe_info = $recipe;
            $recipe_element->categorys = $recipe->categoryInfos;
            $recipe_list[] = $recipe_element;
        }

        // DBの値取得テストLog
        Log::debug("title:".$recipe_list[0]->recipe_info->title);
        Log::debug("category_name:".$recipe_list[1]->categorys[1]->category_name);

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

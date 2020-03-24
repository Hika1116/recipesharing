<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class RecipeController extends Controller
{
    public function add(){
        $category_item_list = Category::all();

        return view('pages.add_recipe')->with([
            'category_item_list'=> json_encode($category_item_list, JSON_PRETTY_PRINT)
        ]);
    }
}

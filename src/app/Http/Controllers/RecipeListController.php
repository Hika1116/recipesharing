<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeListController extends Controller
{
    public function index(){
        return view('pages/recipe_list');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function add(){
        return view('pages.add_recipe');
    }
}

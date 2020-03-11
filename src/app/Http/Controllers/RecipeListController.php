<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Entitys\RecipeCardInfo;
use App\Entitys\SelectData;
use App\Models\Category;
use App\Models\Materials;

class RecipeListController extends Controller
{
    public function index(){
        $recipe_card_list = $this->createRecipeList();
        $category_array = $this->getCategoryArrayData();
        $material_array = $this->getMaterialArrayData();

        return view('pages.recipe_list')->with(
            ['recipe_card_list'=>json_encode($recipe_card_list, JSON_PRETTY_PRINT),
            'category_array'=>json_encode($category_array, JSON_PRETTY_PRINT),
            'material_array'=>json_encode($material_array, JSON_PRETTY_PRINT),
            ]);
    }

    public function search(){
        $recipe_card_list = $this->createRecipeList();
        return view('pages.recipe_list')->with('recipe_card_list', json_encode($recipe_card_list, JSON_PRETTY_PRINT));
    }

    /**
     * カテゴリーテーブルの主キーとカテゴリー名を配列で取得
     * @return category_array
     */
    private function getCategoryArrayData(){
        $category_list = Category::all();
        $category_array = array();
        foreach($category_list as $category){
            $category_array[$category->id] = $category->category_name;
        }
        return $category_array;
    }
    /**
     * 材料テーブルの主キーと材料名を配列で取得
     * @return material
     */
    private function getMaterialArrayData(){
        $material_list = Materials::all();
        $material_array = [];
        foreach($material_list as $material){
            $select_data = new SelectData();
            $select_data->data_id = $material->id;
            $select_data->data_name = $material->material_name;
            $material_array[] = $select_data;
        }
        return $material_array;
    }

    private function createRecipeList(){
        $recipes = Recipe::all();
        $recipe_card_list = [];
        foreach($recipes as $recipe){
            //値の設定
            $recipe_element = new RecipeCardInfo();
            $recipe_element->recipe_id = $recipe->id;
            $recipe_element->user_id = $recipe->user->id;
            $recipe_element->user_name = $recipe->user->name;
            $recipe_element->title = $recipe->title;
            $recipe_element->sentence = $recipe->sentence;
            $recipe_element->favarit_num = $recipe->created_sum;
            $category_list = [];
            foreach($recipe->categoryInfos as $category){
                $category_list[] = $category->category_name;
            }
            $material_list = "";

            $is_first_material= true;
            foreach($recipe->materialInfos as $material){
                if($is_first_material){
                    $material_list = $material_list.$material->material_name;
                    $is_first_material= false;
                    continue;
                }
                $material_list = $material_list.",".$material->material_name;
            }
            $recipe_element->category_list = $category_list;
            $recipe_element->material_list = $material_list;

            $recipe_card_list[] = $recipe_element;
        }
        return $recipe_card_list;
    }
}
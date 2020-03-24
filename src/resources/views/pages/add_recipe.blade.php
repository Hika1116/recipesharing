@extends('base')
 @section('title')
 レシピ追加
 @endsection

 @section('container')
  <script src="{{ mix('js/add_recipe.js') }}" defer></script>
  <div id="app">
  <add-recipe-parent json-str-category-item-list='{{$category_item_list}}'></add-recipe-parent>
  </div>
 @endsection
@extends('base')
 @section('title')
 レシピ追加
 @endsection

 @section('container')
  <script src="{{ mix('js/add_recipe.js') }}" defer></script>
  <div id="app">
  <add-recipe-parent></add-recipe-parent>
  </div>
 @endsection
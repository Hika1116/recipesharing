 @extends('base')
 @section('title')
  Recipe List 
 @endsection

 @section('container')
  <script src="{{ mix('js/recipe_list.js') }}" defer></script>
  <div id="app">
  <recipe-list-parent recipe-list="{{$recipe_list}}"></recipe-list-parent>
  </div>
 @endsection
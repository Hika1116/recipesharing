 @extends('base')
 @section('title')
  Recipe List 
 @endsection

 @section('container')
  <script src="{{ mix('js/recipe_list.js') }}" defer></script>
  <div id="app">
  <recipe-list-parent recipe-card-list="{{$recipe_card_list}}"></recipe-list-parent>
  </div>
 @endsection
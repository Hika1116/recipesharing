 @extends('base')
 @section('title')
  Recipe List
 @endsection

 @section('container')
  <script src="{{ mix('js/recipe_list.js') }}" defer></script>
  <div id="app">
  <recipe-list-parent 
  recipe-card-list="{{$recipe_card_list}}"
  category-array="{{$category_array}}"
  material-array="{{$material_array}}"></recipe-list-parent>
  </div>
 @endsection
 @extends('base')
 @section('title')
  レシピ一覧
 @endsection

 @section('container')
  <script src="{{ mix('js/recipe_list.js') }}" defer></script>
  <div id="app">
  <recipe-list-parent 
  recipe-card-list="{{$recipe_card_list}}"
  category-array="{{$category_array}}"
  material-array="{{$material_array}}"
  category-form-selected-items="{{$category_form_selected_items}}"
  material-form-selected-items="{{$material_form_selected_items}}"></recipe-list-parent>
  </div>
 @endsection
 @extends('base')
 @section('title')
  Recipe List 
 @endsection
 @section('container')

  <script src="{{ mix('js/recipe_list.js') }}" defer></script>
     <div id='wrapper-recipe'>
      <h2>レシピ一覧 <i class="fas fa-list-alt"></i></h2>
      {{$recipe_list}}
      
     </div>

     <style>
       #wrapper-recipe {
         width: 800px;
         margin: 30px auto;
         border: solid 2px #BCB5B5;
         box-shadow: 0 0 8px #BCB5B5;
         border-radius: 12px;
       }
       #wrapper-recipe h2 {
         font-size: 1.5rem;
         color: white;
         margin-left: 20px;
         font-weight: bold;
         background-color: #EF866B;
         margin: 0;
         padding: 15px;
         border-radius: 10px 10px 0 0;
       }
     </style>
 @endsection
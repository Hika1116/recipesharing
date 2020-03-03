 @extends('base')
 @section('title')
  Recipe List 
 @endsection
 @section('container')

  <script src="{{ mix('js/recipe_list.js') }}" defer></script>
     <div id='wrapper-recipe'>
       <h2>レシピ一覧</h2>
       <hr>

       <div>
         <recipe-card>
           <template v-slot:recipe-context>
             1番目のレシピになります。<br>
             ここにはレシピの紹介文が表示されます。
           </template>
         </recipe-card>
       </div>
     </div>

     <style>
       #wrapper-recipe {
         width: 800px;
         margin: 30px auto;
         border: solid 2px #BCB5B5;
         box-shadow: 0 0 8px #BCB5B5;
         border-radius: 10px;
       }
       #wrapper-recipe hr {
         color: #BCB5B5;
         size: 2px;
       }
       #wrapper-recipe h2 {
         font-size: 1.5rem;
         color: #BCB5B5;
         margin-left: 20px;
         font-weight: bold;
       }
     </style>
 @endsection
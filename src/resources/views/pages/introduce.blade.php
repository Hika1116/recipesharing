 @extends('base')
 @section('title')
  Introduce 
 @endsection
 @section('container')

  <script src="{{ mix('js/introduce.js') }}" defer></script>
     <div>
       <div id="top-header">
        <Top-header></Top-header>
       </div>
       <p><a href="{{route('recipes')}}">リスト一覧へ</a></p>
     </div>
 @endsection
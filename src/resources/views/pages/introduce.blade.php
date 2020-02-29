 @extends('base')
 @section('title')
  Introduce 
 @endsection
 @section('container')

     <script src="{{ mix('js/app.js') }}" defer></script>

     <div>
       <h1>Introduce Page</h1>
       <p>ここは訪問者が初回に訪れるページです。</p>
     <p><a href="{{route('recipes')}}">リスト一覧へ</a></p>
     <div id="app"></div>
     </div>
 @endsection
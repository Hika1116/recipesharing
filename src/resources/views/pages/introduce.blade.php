 @extends('base')
 @section('title')
  Introduce 
 @endsection
 @section('container')
     <div>
       <p>ここは訪問者が初回に訪れるページです。</p>
     <p><a href="{{route('recipes')}}">リスト一覧へ</a></p>
     </div>
 @endsection
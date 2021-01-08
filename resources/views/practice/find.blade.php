@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  検索ページ
@endsection

@section('content')
  <p>ここが本文のコンテンツ</p>
<form action="/practice/find" method="post">
{{ csrf_field() }}
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="find">
</form>
@if(isset($item))
<table>
  <tr><th>Data</th></tr>
  <tr>
    <td>{{$item->getData()}}</td>
  </tr>
</table>
@endif

@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

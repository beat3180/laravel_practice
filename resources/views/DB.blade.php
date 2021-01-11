@extends('layouts.hello')
<style>
  .pagination { font-size:10pt; }
  .pagination li { display:inline-block; }
  tr th a:link { color:white; }
  tr th a:visited{ color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
</style>

@section('title','Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツ</p>
  <table>
    <tr>
      <th><a href="/db?sort=name">Name</a></th>
      <th><a href="/db?sort=age">Age</a></th>
      <th><a href="/db?sort=mail">Mail</a></th>
    </tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->mail}}</td>
      </tr>
    @endforeach
  </table>
  {{ $items->appends(['sort' => $sort])->links() }}

@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

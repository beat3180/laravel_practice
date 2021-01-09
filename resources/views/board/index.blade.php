@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツ</p>
<table>
  <tr><th>Message</th><th>Name</th></tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->message}}</td>
      <td>{{$item->practice->name}}</td>
    </tr>
  @endforeach
</table>

@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

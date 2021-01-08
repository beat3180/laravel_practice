@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツ</p>
<table>
  <tr><th>Data</th></tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
    </tr>
  @endforeach
</table>

@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

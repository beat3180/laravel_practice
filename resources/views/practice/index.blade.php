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

  {{--<table>
  <tr><th>Name</th><th>Age</th><th>Mail</th></tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->age}}</td>
      <td>{{$item->mail}}</td>
    </tr>
  @endforeach
  </table>--}}

@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

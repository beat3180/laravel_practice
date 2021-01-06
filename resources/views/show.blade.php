@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')


  @foreach($items as $item)
    <table width="400px">
      <tr>
        <th width="50px">id: </th><td width="50px">{{$item->id}}</td>
        <th width="50px">name: </th><td>{{$item->name}}</td>
      </tr>
    </table>
  @endforeach




  <p>必要なだけ記述ができる</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  セッションページ
@endsection

@section('content')
  <p>{{$session_data}}</p>
  <form method="post" action="/session">
    {{ csrf_field() }}
    <input type="text" name="input">
    <input type="submit" value="send">
  </form>

  <p>必要なだけ記述ができる</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

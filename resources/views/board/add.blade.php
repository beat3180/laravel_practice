@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  投稿ページ
@endsection

@section('content')


  <form action="{{ url('/board/add')}}" method="post">
    <table>
     {{ csrf_field() }}
      <tr><th>practice id: </th><td><input type="number" name="practice_id"></td></tr>
      <tr><th>title: </th><td><input type="text" name="title"></td></tr>
      <tr><th>message: </th><td><input type="text" name="message"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>


  <p>必要なだけ記述ができる</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

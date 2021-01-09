@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  新規登録ページ
@endsection

@section('content')

  <form action="{{ url('/rest')}}" method="post">
    <table>
     {{ csrf_field() }}
      <tr><th>message: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
      <tr><th>url: </th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>


  <p>必要なだけ記述ができる</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

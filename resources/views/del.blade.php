@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
  @if(count($errors) > 0)
  <p>入力に問題があります。再入力してください。</p>
  @endif


  <form action="{{ url('/del')}}" method="post">
    <table>
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{($form->id)}}">
      <tr><th>name: </th><td>{{$form->name}}</td></tr>
      <tr><th>mail: </th><td>{{$form->mail}}</td></tr>
      <tr><th>age: </th><td>{{$form->age}}</td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>


  <p>必要なだけ記述ができる</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

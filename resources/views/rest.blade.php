@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  rest
@endsection

@section('content')

@include('rest.create')


  <p>必要なだけ記述ができる</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

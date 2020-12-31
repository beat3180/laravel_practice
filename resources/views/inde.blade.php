{{-- レイアウトファイルを指定 --}}
@extends('layouts.default')


{{-- @yield('title') の部分を穴埋め --}}
@section('title', $title)



{{-- @yield('content') の部分を穴埋め --}}
@section('content')
<h1>POST通信してみる（フォーム）</h1>
<p>{{$msg}}</p>
<form action="{{ url('/inde')}}" method="POST">
    {{ csrf_field() }}
    <div><textarea rows="6" name="message"></textarea></div>
    <div><input type="submit" name="add"></div>
</form>
@endsection

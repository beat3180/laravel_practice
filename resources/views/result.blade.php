{{-- レイアウトファイルを指定 --}}
@extends('layouts.default')


{{-- @yield('title') の部分を穴埋め --}}
@section('title', $title)



{{-- @yield('content') の部分を穴埋め --}}
@section('content')
<h1>POST通信してみる（結果）</h1>
<p>{{$msg}}</p>
@endsection

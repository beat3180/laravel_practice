{{-- レイアウトファイルを指定 --}}
@extends('layouts.default')


{{-- @yield('title') の部分を穴埋め --}}
@section('title', $title)



{{-- @yield('content') の部分を穴埋め --}}
@section('content')
    <p>{{ $messages->name }}: {{ $messages->body }}</p>

@endsection

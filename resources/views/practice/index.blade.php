@extends('layouts.hello')

@section('title','Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツ</p>


<table>
  <tr><th>Practice</th><th>Board</th></tr>
  @foreach($hasItems as $item)
    <tr>
      <td>{{$item->getData()}}</td>
      <td>
        @if($item->boards != null)
          <table width="100%">
            @foreach($item->boards as $obj)
              <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
          </table>
        @endif
      </td>
    </tr>
  @endforeach
</table>
<div style="margin:10;"></div>
<table>
  <tr><th>Practice</tr></th>
    @foreach($noItems as $item)
      <tr>
        <td>{{$item->getData()}}
      </tr>
    @endforeach
</table>




{{--hasmanyの結合}}
{{--<table>
  <tr><th>Practice</th><th>Board</th></tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
      <td>
        @if($item->boards != null)
          <table width="100%">
            @foreach($item->boards as $obj)
              <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
          </table>
        @endif
      </td>
    </tr>
  @endforeach
</table>--}}


{{--hasOne結合--}}
{{--<table>
  <tr><th>Practice</th><th>Board</th></tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
      <td>
        @if($item->board != null)
          {{$item->board->getData()}}
        @endif
    </tr>
  @endforeach
</table>--}}

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

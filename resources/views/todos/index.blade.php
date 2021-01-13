@extends('layouts.bootstrap')

@section('title','Todo')

@section('content')
<div class="container" style="margin-top:50px;">
    <h1>Todoリスト追加</h1>

<form action="{{ url('/todos')}}" method="post">
      {{csrf_field()}}
  <div class="form-group">
    <label >やることを追加してください</label>
    <input type="text" name="body"class="form-control" placeholder="todo list" style="max-width:1000px;">
  </div>
  <button type="submit" class="btn btn-primary">追加する</button>
</form>

    <h1 style="margin-top:50px;">Todoリスト</h1>
    <table class="table table-striped" style="max-width:1000px; margin-top:20px;">
  <tbody>
    @foreach ($todos as $todo)
    <tr>
      <td>{{$todo->body}}</td>
      <td>
      <form action="{{ action('TodosController@edit', $todo) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('get') }}
          <button type="submit" class="btn btn-primary">編集</button>
      </form>
      </td>

      <!-- 削除ボタン -->
      <td><form action="{{url('/todos', $todo->id)}}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button type="submit" class="btn btn-danger">削除</button>
      </form>
      </td>

      <!-- 削除した際にポップ画面で確認をする -->
      <!-- <td><a class="del" data-id="{{ $todo->id }}" href="#">削除</a>
        <form method="post" action='{{ url('/todos', $todo->id) }}' id="form_{{ $todo->id}}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </td> -->
    </tr>
    @endforeach
  </table>
</div>


@endsection

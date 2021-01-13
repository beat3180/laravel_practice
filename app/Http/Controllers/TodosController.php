<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//モデルクラスを継承
use App\Todo;

class TodosController extends Controller
{
    //indexを表示
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index',compact('todos'));
    }

    public function store(Request $request) {
      $todo = new Todo();
      $todo->body = $request->body;
      $todo->save();
      return redirect('/todo/index');
    }

    public function destroy(todo $todo)
     {
        $todo->delete();
       return redirect('/todo/index');
     }

     public function edit(todo $todo)
    {
      return view('todos.edit', compact('todo'));
    }

    public function update(Request $request,todo $todo)
    {
      $todo->body = $request->body;
      $todo->save();
      return redirect('/todo/index');
    }
}

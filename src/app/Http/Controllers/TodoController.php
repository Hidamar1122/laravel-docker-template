<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
      $todo = new Todo();
      $todos = $todo->all();
      // ⭐️ $todo->all();の返り値
      // コレクションクラスのインスタンス 

      return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
        // TODO: 第1引数を指定
        return view('todo.create'); 
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        // ⭐️$request->all();返り値データ型
        // 連想配列

        $todo = new Todo();
        $todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);

        return view('todo.show', ['todo' => $todo]);
    }
}
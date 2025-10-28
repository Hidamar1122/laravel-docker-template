<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    private $todo; 

    public function __construct(Todo $todo)
    {
        $this->todo = $todo; 
    }


    public function index()
    {
      // ⭐️ $todo->all();の返り値
      // コレクションクラスのインスタンス 
      $todos = $this->todo->all();
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

        $this->todo->fill($inputs);
        $this->todo->save();

        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.show', ['todo' => $todo]);
    }
}
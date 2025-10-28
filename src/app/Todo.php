<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    // ⭐️fillableプロパティが何を設定しているのか
    // DBへ指定した項目以外のデータの挿入を防ぐ
    protected $fillable = [
        'content',
    ];
}

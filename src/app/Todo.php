<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;

    protected $table = 'todos';

    // ⭐️fillableプロパティが何を設定しているのか
    // DBへ指定した項目以外のデータの挿入を防ぐ
    protected $fillable = [
        'content',
    ];
}

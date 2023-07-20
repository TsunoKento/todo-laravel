<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * TODOリスト
 * 
 * @property int $id ID
 * @property string $title タイトル
 * @property \Illuminate\Support\Carbon created_at 作成日時
 * @property \Illuminate\Support\Carbon updated_at 更新日時
 */
class Todo extends Model
{
    use HasFactory;
}

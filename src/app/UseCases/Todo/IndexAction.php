<?php

namespace App\UseCases\Todo;

use App\Models\Todo;

final class IndexAction
{
    /**
     * TODOの一覧を返す
     * 
     * @return \Illuminate\Database\Eloquent\Collection<Todo>
     */
    public function __invoke(): \Illuminate\Database\Eloquent\Collection
    {
        return Todo::all();
    }
}

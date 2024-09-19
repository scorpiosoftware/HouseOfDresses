<?php

namespace App\Actions\Post;

use App\Models\Post;

class ListPost
{
    public static function execute($inputs = []) {
     
        $record = new Post();
        $record = $record->orderBy('id','asc');
        $record = $record->paginate(10);
        return $record;
    }
}

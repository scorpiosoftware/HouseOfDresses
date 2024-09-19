<?php

namespace App\Actions\Post;

use App\Models\Post;

class StorePost
{
    public static function execute($inputs) {
        $record = new Post();
        return $record->create($inputs);
    }
}

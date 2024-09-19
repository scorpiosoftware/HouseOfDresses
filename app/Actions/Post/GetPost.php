<?php

namespace App\Actions\Post;

use App\Models\Post;

class GetPost
{
    public static function execute($id) {
        $record = Post::find($id);
        return $record;
    }
}

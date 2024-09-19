<?php

namespace App\Actions\Post;

use App\Models\Post;

class DestroyPost
{
    public static function execute($id) {
        $record = Post::find($id);
        return $record->delete();
    }
}

<?php

namespace App\Actions\Post;

use App\Models\Post;

class UpdatePost
{
    public static function execute($id,$inputs) {
        $record = Post::find($id);
        return $record->update($inputs);
    }
}

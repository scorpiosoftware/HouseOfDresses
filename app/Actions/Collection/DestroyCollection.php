<?php

namespace App\Actions\Collection;

use App\Models\Collection;

class DestroyCollection
{
    public static function execute($id) {
        $record = Collection::find($id);
        return $record->delete();
    }
}

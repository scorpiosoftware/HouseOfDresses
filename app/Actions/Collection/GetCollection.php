<?php

namespace App\Actions\Collection;

use App\Models\Collection;

class GetCollection
{
    public static function execute($id) {
        $record = Collection::find($id);
        return $record;
    }
}

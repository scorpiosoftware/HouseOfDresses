<?php

namespace App\Actions\Collection;

use App\Models\Collection;

class StoreCollection
{
    public static function execute($inputs) {
        $record = new Collection();
        return $record->create($inputs);
    }
}

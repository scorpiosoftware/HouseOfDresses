<?php

namespace App\Actions\Size;

use App\Models\Size;

class StoreSize
{
    public static function execute($inputs) {
        $record = new Size();
        return $record->create($inputs);
    }
}

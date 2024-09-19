<?php

namespace App\Actions\Color;

use App\Models\Color;

class StoreColor
{
    public static function execute($inputs) {
        $record = new Color();
        return $record->create($inputs);
    }
}

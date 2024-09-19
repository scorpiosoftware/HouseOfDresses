<?php

namespace App\Actions\Color;

use App\Models\Color;

class DestroyColor
{
    public static function execute($id) {
        $record = Color::find($id);
        return $record->delete();
    }
}

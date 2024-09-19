<?php

namespace App\Actions\Size;

use App\Models\Size;

class DestroySize
{
    public static function execute($id) {
        $record = Size::find($id);
        return $record->delete();
    }
}

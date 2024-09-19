<?php

namespace App\Actions\Size;

use App\Models\Size;

class GetSize
{
    public static function execute($id) {
        $record = Size::find($id);
        return $record;
    }
}

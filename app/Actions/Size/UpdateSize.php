<?php

namespace App\Actions\Size;

use App\Models\Size;

class UpdateSize
{
    public static function execute($id,$inputs) {
        $record = Size::find($id);
        return $record->update($inputs);
    }
}

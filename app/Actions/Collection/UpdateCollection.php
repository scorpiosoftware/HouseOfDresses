<?php

namespace App\Actions\Collection;

use App\Models\Collection;

class UpdateCollection
{
    public static function execute($id,$inputs) {
        $record = Collection::find($id);
        return $record->update($inputs);
    }
}

<?php

namespace App\Actions\Collection;

use App\Models\Collection;

class ListCollection
{
    public static function execute($inputs = []) {
     
        $record = new Collection();

        if(isset($inputs['search'])){
            $record->where('name_en','LIKE','%'. $inputs['search'] .'%');
        }

        $record = $record->orderBy('id','desc');
        $record = $record->paginate(10);
        return $record;
    }
}

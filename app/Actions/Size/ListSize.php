<?php

namespace App\Actions\Size;

use App\Models\Size;

class ListSize
{

    public static function execute($inputs = []) {
     
        $records = new Size();

        if (!empty($inputs['search'])) {
            $records = $records->where('name_en','LIKE',"%{$inputs['search']}%")
            ->orWhere('name_ar','LIKE',"%{$inputs['search']}%");
        }

        $records = $records->orderBy('id','asc');
        $records = $records->paginate(10);
        return $records;
    }
}

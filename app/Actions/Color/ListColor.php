<?php

namespace App\Actions\Color;

use App\Models\Color;

class ListColor
{
    public static function execute($inputs = []) {
     
        $records = new Color();
        if(!empty($inputs['product'])){
            $records = $records->where('product_id',$inputs['product']);
        }
        $records = $records->orderBy('id','asc');
        $records = $records->paginate(10);
        return $records;
    }
}

<?php

namespace App\Actions\User;

use App\Models\User;

class ListUser
{
    public static function execute($inputs = []) {
     
        $record = new User();

        if(isset($inputs['search'])){
            $record->where('email','LIKE','%'. $inputs['search'] .'%');
        }

        $record = $record->orderBy('id','asc');
        $record = $record->paginate(10);
        return $record;
    }
}

<?php
namespace App\Actions\Brand;

use App\Models\Brand;

class UpdateBrand {
    public static function execute($id,$inputs) {
        $record = Brand::find($id);
        return $record->update($inputs);
    }
}
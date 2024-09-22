<?php

namespace App\Actions\Carousel;

use App\Models\Carousel;
use App\Models\Color;

class StoreCarousel
{
    public static function execute($inputs) {
        $record = new Carousel();
        return $record->create($inputs);
    }
}

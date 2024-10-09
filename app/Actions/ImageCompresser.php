<?php

namespace App\Actions;

use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageCompresser
{

    public static  function execute($store_path,$width = 400,$height = 400){
        $manager = new ImageManager(new Driver());
        // $store_path = $manager->read($store_path);
        $image = $manager->read($store_path);
        $image = $image->scale(width:$width,height:$height);
        $image->toPng()->save($store_path);
        // dd($image);
    }
}

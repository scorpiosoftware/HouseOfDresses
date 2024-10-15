<?php

namespace App\Actions;

use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageInfo
{
    public static  function execute($store_path){
        $manager = new ImageManager(new Driver());
        $image = $manager->read($store_path);
        return $image->scale();
    }
}

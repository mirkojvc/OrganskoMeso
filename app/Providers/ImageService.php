<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;

class ImageService
{

	public static function uploadImage($file, $quality = 75) {
        $return = null;
        $destination_url = $_SERVER['DOCUMENT_ROOT'].'/images/';
        $info = getimagesize($file);
        $extension = image_type_to_extension($info[2]);
        $path = $file->getPathname();
        $filename = Hash::make($file->getClientOriginalName().date("Y-m-d h:i:sa"));
        $filename = str_replace('/', '-', $filename);

        if ($info['mime'] === 'image/jpeg') {
            $image = imagecreatefromjpeg($path);
            imagejpeg($image, $destination_url.$filename.$extension, $quality);
            imagedestroy($image);
        } elseif ($info['mime'] === 'image/png') {
            $image = imagecreatefrompng($path);
            imageAlphaBlending($image, true);
            imageSaveAlpha($image, true);
            $png_quality = 9 - (($quality * 9 ) / 100 );
            imagePng($image, $destination_url.$filename.$extension, $png_quality);
            imagedestroy($image);
        } elseif ($info['mime'] === 'image/gif') {
            $file->move($destination_url, $filename.$extension);
        }

        return $filename.$extension;
    }

    public static function updateImage($old_name, $new_name) {
        $path = $_SERVER['DOCUMENT_ROOT'].'/images/';;
        self::deleteImage($old_name, $path);
        $new_name = self::uploadImage($new_name, $path);
        return $new_name;
    }

    public static function deleteImage($name) {
        $path = $_SERVER['DOCUMENT_ROOT'].'/images/';;
        if (file_exists($path) && !is_dir($path)) {
            unlink($path);
            return true;
        } else {
            return false;
        }
    }
}

<?php
namespace App\Helpers;

class MyHelper
{
    public static function getFirstImage($string)//JN:return link to img
    {
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $string, $image);
        if (empty(trim($image['src'])))
            return 'default.jpg';
        return trim($image['src']);
    }

    public static function createResponseImage($public_file_name = '', $img_name = '')//$public_file_name: file name in public folder: 'images' or 'images/course'...
    {//JN:171109
        //$suffix = 'x1';
        if(!isset($public_file_name, $img_name)) return false;
        $width_des_pc = 2500;
        $suffix_pc = 'l';
        $width_des_tl = 1600;
        $suffix_tl = 'm';
        $width_des_mb = 800;
        $suffix_mb = 's';
        $path = public_path( 'images/' . $public_file_name);
        $path_img = $path . "\\" . $img_name;
        $file_info = pathinfo($path_img);
        //$img_name = $file_info['filename'];
        $size = getimagesize($path_img);//Index 0 and 1 contains respectively the width and the height of the image.
        $width_src = $size[0];
        $type = $size['mime'];

//        $name_img = $file_info['filename'] . '-' . $suffix_pc;
//        MyHelper::createImageScale(600, $path, $path_img, $name_img, $type);

//        $stream = imagecreatefromstring(file_get_contents($path_img));
        if ($width_src >= $width_des_pc) {
            $name_img = $file_info['filename'] . '-' . $suffix_pc;
            MyHelper::createImageScale($width_des_pc, $path, $path_img, $name_img, $type);
            $name_img = $file_info['filename'] . '-' . $suffix_tl;
            MyHelper::createImageScale($width_des_tl, $path, $path_img, $name_img, $type);
            $name_img = $file_info['filename'] . '-' . $suffix_mb;
            MyHelper::createImageScale($width_des_mb, $path, $path_img, $name_img, $type);
            return true;
        } elseif ($width_src >= $width_des_tl) {
            $name_img = $file_info['filename'] . '-' . $suffix_tl;
            MyHelper::createImageScale($width_des_tl, $path, $path_img, $name_img, $type);
            $name_img = $file_info['filename'] . '-' . $suffix_mb;
            MyHelper::createImageScale($width_des_mb, $path, $path_img, $name_img, $type);
            return true;
        }
        return;
//        $scaleImg = imagescale($newImg, 300, -1);
//        imagejpeg($scaleImg, public_path('testx2.jpg'), 100);
    }

    public static function createImageScale($width, $path, $path_img, $new_name, $type)
    {//JN:171109
        //$imgPath = '';
        if ($type == 'image/jpeg') {
            $stream = imagecreatefromjpeg($path_img);
            $imageItem = imagescale($stream, $width, -1);
            imagejpeg($imageItem, $path . '\\' . $new_name . '.jpg' , 100);
        } elseif ($type == 'image/gif') {
            $stream = imagecreatefromgif($path_img);
            $imageItem = imagescale($stream, $width, -1);
            imagegif($imageItem, $path . '\\' . $new_name . '.gif');
        } elseif ($type == 'image/png') {
            $stream = imagecreatefrompng($path_img);
            $imageItem = imagescale($stream, $width, -1);
            imagepng($imageItem, $path . '\\' . $new_name . '.png', 9);

//        $stream = imagecreatefromstring(file_get_contents($path_img));
//        $scaleImg = imagescale($stream, $width, -1);
//        imagejpeg($scaleImg, $path_name, 100);

        }
    }

    public static function createThumbnail($public_file_name = '', $img_name = ''){
        $width = 600;
        //$height = 400;
        $path = public_path( 'imgs/' . $public_file_name );
        $path_img = $path . "/" . $img_name;
        $file_info = pathinfo($path_img);
        $size = getimagesize($path_img);//Index 0 and 1 contains respectively the width and the height of the image.
        //$width_src = $size[0];
        $type = $size['mime'];

        MyHelper::createImageScale($width, $path, $path_img, $file_info['filename'], $type);
    }
}
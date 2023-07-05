<?php

class Thumb
{
    public function make(string $imagename, string $saveName, int $width, int $height, int $type = 3)
    {
        $image = $this->resource($imagename);
        $info = $this->getsize($width, $height, imagesx($image), imagesy($image), $type);
        $res = imagecreatetruecolor($info[0], $info[1]);
        imagecopyresampled($res, $image, 0, 0, 0, 0, $info[0], $info[1], $info[2], $info[3]);
        header('Content-type:image/jpeg');
        imagejpeg($res);
        $this->save($imagename)($res,$saveName);
    }

    protected function save(string $image){
        $info = getimagesize($image);
        $funtions = [1 => 'imagegif', 2 => 'imagejpeg', 3 => 'imagepng'];
        return $funtions[$info[2]];
    }

    protected function getsize(int $rw, int $rh, int $iw, int $ih, int $type)
    {

        switch ($type) {
            case 1:
                //图片不变,变的是画布,保留宽度,高度自动
                $rh = $ih * $rw / $iw;
                break;
            case 2:
                //保留高度,宽度自动
                $rw = $rh * $iw / $ih;
                break;
            default:
                if ($iw / $rw > $ih / $rh) {
                    $iw = $ih * $rw / $rh;
                } else {
                    $ih = $iw * $rh / $rw;
                }


        }


        return [$rw, $rh, $iw, $ih];
    }


    protected function resource(string $image)
    {

        $this->checkfile($image);
        $info = getimagesize($image);
        $funtions = [1 => 'imagecreatefromgif', 2 => 'imagecreatefromjpeg', 3 => 'imagecreatefrompng'];
        $call = $funtions[$info[2]];
        return $call($image);
    }

    protected function checkfile(string $image)
    {
        if (!is_file($image) || getimagesize($image) === false) {
            throw new Exception('file do not exist or it is not image');
        }
    }


}



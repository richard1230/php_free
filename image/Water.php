<?php

class  Water{

   protected $water;

   public function __construct(string $water){
       $this->water = $water;
   }

    public function make(string $image,string $filename= null,int $pos=1){
        $this->checkImage($image);
        $res =  $this->resource($image);
        $water =  $this->resource($this->water);
        $position = $this->position($res,$water,$pos);
//        $postion['x']   $postion['y']
        imagecopy($res,$water, $position['x'] ,  $position['y'] ,0,0,imagesx($water),imagesy($water));
        //  imagegif imagepng  imagejpeg(res,'1.png')
//        header('Content-type:image/jpeg');
        return $this->imageAction($image)($res,$filename??$image);
    }


    protected function position($res,$water,$pos){
       $info=['x'=>0,'y'=>0];
       switch ($pos){
           case 1:
               break;
           case 2:
               $info['x']=(imagesx($res)-imagesx($water))/3;
               $info['y']=(imagesx($res)-imagesx($water))/3;

       }

        return $info;
    }
    protected function checkImage(string $image){

        if (!is_file($image) || getimagesize($image) === false){
            throw new Exception('file is not image');
        }

    }


    protected function imageAction(string  $image){
        $info = getimagesize($image);
        $functions = [1=>'imagegif',2=>'imagejpeg',3=>'imagepng'];
        return $functions[$info[2]];
    }

    //根据图片生成资源
    protected function resource(string $image){
        $info = getimagesize($image);
        $functions = [1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
        $call = $functions[$info[2]];
        return $call($image);
    }

}
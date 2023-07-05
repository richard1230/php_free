<?php


class Captcha{
    protected $width;
    protected $height;
    protected $res;
    protected $code;
    //验证码的具体数量
    protected $len;
    public function __construct(int $width = 100,int $height = 35,$len=5)
    {
        $this->height = $height;
        $this->width = $width;
        $this->len = $len;
    }

    public function render(){
        $res = imagecreatetruecolor($this->width,$this->height);
        imagefill($this->res = $res,0,0,imagecolorallocate($res,200,200,200));
        $this->text();
        $this->pix();
        $this->line();
        $this->show();
        return $this->code;
    }

    //创建验证码
    protected function text(){
        $font = realpath('source.otf');
        $word='qwertyuiopasdfghjklzxcvbnm1234567890';

        for ($i=0;$i<$this->len;$i++){
            $x = $this->width/$this->len;
            $angle = mt_rand(-20,20);
            $box = imagettfbbox(20,$angle,$font,'A');
            $this->code .= $code=strtoupper($word[mt_rand(0,strlen($word)-1)]);
            imagettftext(
                $this->res,
                20,
                $angle,
                $x * $i+10,
                $this->height/2-($box[7]-$box[0])/2,
                $this->textcolor(),
                $font,
                $code
            );
        }
    }
    protected function show(){
        header("Content-type:image/png");
        imagepng($this->res);
    }


    protected function line(){
        imagesetthickness($this->res,mt_rand(1,3));
        for ($i=0;$i<6;$i++){
            imageline(
                $this->res,
                mt_rand(0,$this->width),
                mt_rand(0,$this->height),
                mt_rand(0,$this->width),
                mt_rand(0,$this->height),
                $this->color()
            );
        }
    }

    protected function color(){
      return imagecolorallocate(
            $this->res,
            mt_rand(0,255),
            mt_rand(0,255),
            mt_rand(0,255)
      );
    }

    protected function textcolor(){
        return imagecolorallocate(
            $this->res,
            mt_rand(0,100),
            mt_rand(0,100),
            mt_rand(0,100)
        );
    }

    protected function pix(){
       for ($i=0;$i<300;$i++){
           imagesetpixel(
               $this->res,
               mt_rand(0,$this->width),
               mt_rand(0,$this->height),
               $this->color()
           );
       }
    }
}
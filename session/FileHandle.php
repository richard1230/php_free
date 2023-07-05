<?php

class FileHandle implements SessionHandlerInterface{

    protected $path;

    protected $max_lifetime;

    public function __construct($path='save_session',$max_lifetime=1440){

        $this->path=$this->makedir($path) ;
//        echo $this->path;
        $this->max_lifetime = $max_lifetime;
    }


    protected function makedir($path){
        is_dir($path)or mkdir($path,0755,true);
        return realpath($path);
    }

    public function open(string $path, string $name): bool
    {
        // TODO: Implement open() method.
        return true;
    }

    public function close(): bool
    {
        // TODO: Implement close() method.
        return true;
    }

    public function read(string $id): string|false
    {
        // TODO: Implement read() method.
        return (string)@file_get_contents($this->path.'/'.$id);
    }

    public function write(string $id, string $data): bool
    {
        // TODO: Implement write() method.
        return (bool)@file_put_contents($this->path.'/'.$id,$data);
    }

    public function destroy(string $id): bool
    {
        // TODO: Implement destroy() method.

        return (bool) @unlink($this->path.'/'.$id);
    }

    public function gc(int $max_lifetime): int|false
    {
        // TODO: Implement gc() method.
        foreach (glob($this->path.'/*') as $file){
            if (filemtime($file) + $this->max_lifetime < time()){
                @unlink($file);
            }
        }
        return true;
    }
}

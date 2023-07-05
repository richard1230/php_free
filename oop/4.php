<?php


interface InterfaceCache{
    public function get();
    public function set();
}


class Mysql implements InterfaceCache{
    public function get()
    {
        return "get: this is in Mysql";
        // TODO: Implement get() method.
    }
    public function set()
    {
        return "set:this is in Mysql";
        // TODO: Implement set() method.
    }
}


class Redis implements InterfaceCache{
    public function get()
    {
        return "get: this is in Redis";
        // TODO: Implement get() method.
    }
    public function set()
    {
        return "set:this is in Redis";
        // TODO: Implement set() method.
    }
}

class Cache {
    public static function instance(string $driver){
        switch (strtolower($driver)){
            case 'mysql':
                return new Mysql();
            case 'redis':
                return new Redis();
        }
    }
}


$cache = Cache::instance('redis');

echo $cache->get();


//抽象类和接口的区别:


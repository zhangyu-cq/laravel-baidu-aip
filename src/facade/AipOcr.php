<?php


namespace ZhangyuCq\LaravelBaiduAip\facade;


use Illuminate\Support\Facades\Facade;

class AipOcr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipOcr';
    }
}

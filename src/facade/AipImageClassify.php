<?php


namespace ZhangyuCq\LaravelBaiduAip\facade;


use Illuminate\Support\Facades\Facade;

class AipImageClassify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipImageClassify';
    }
}

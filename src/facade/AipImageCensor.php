<?php


namespace ZhangyuCq\LaravelBaiduAip\facade;


use Illuminate\Support\Facades\Facade;

class AipImageCensor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipImageCensor';
    }
}

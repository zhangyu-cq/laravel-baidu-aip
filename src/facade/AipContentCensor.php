<?php


namespace ZhangyuCq\LaravelBaiduAip\facade;


use Illuminate\Support\Facades\Facade;

class AipContentCensor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipContentCensor';
    }
}

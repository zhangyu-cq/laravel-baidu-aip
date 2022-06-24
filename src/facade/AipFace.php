<?php
namespace ZhangyuCq\LaravelBaiduAip\facade;

use Illuminate\Support\Facades\Facade;

class AipFace extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipFace';
    }
}

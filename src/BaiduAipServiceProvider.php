<?php

namespace ZhangyuCq\LaravelBaiduAip;

use Illuminate\Support\ServiceProvider;
use ZhangyuCq\LaravelBaiduAip\baidu\AipBodyAnalysis;
use ZhangyuCq\LaravelBaiduAip\baidu\AipContentCensor;
use ZhangyuCq\LaravelBaiduAip\baidu\AipFace;
use ZhangyuCq\LaravelBaiduAip\baidu\AipImageCensor;
use ZhangyuCq\LaravelBaiduAip\baidu\AipImageClassify;
use ZhangyuCq\LaravelBaiduAip\baidu\AipImageProcess;
use ZhangyuCq\LaravelBaiduAip\baidu\AipImageSearch;
use ZhangyuCq\LaravelBaiduAip\baidu\AipKg;
use ZhangyuCq\LaravelBaiduAip\baidu\AipNlp;
use ZhangyuCq\LaravelBaiduAip\baidu\AipOcr;
use ZhangyuCq\LaravelBaiduAip\baidu\AipSpeech;

class BaiduAipServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../src/config/baidu.php' => config_path('baidu.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton('AipFace', function () {
            return new AipFace(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipKg', function () {
            return new AipKg(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipNlp', function () {
            return new AipNlp(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipOcr', function () {
            return new AipOcr(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipSpeech', function () {
            return new AipSpeech(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipImageSearch', function () {
            return new AipImageSearch(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipImageProcess', function () {
            return new AipImageProcess(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipImageClassify', function () {
            return new AipImageClassify(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipImageCensor', function () {
            return new AipImageCensor(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipBodyAnalysis', function () {
            return new AipBodyAnalysis(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });
        $this->app->singleton('AipContentCensor', function () {
            return new AipContentCensor(config('baidu.app_id'), config('baidu.app_key'), config('baidu.app_secret'));
        });

    }
}

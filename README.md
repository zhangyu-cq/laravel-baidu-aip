## 安装
```shell script
 composer require zhangyu-cq/laravel-baidu-aip
```
## 发布配置
```shell script
php artisan vendor:publish --provider="ZhangyuCq\LaravelBaiduAip\BaiduAipServiceProvider"
```

## 配置配置
    ```php
        <?php
        return [
            'app_id' => env('BAIDU_APP_ID',''),
            'app_key' => env('BAIDU_APP_KEY',''),
            'app_secret' => env('BAIDU_APP_SECRET','')
        ];

    ```
> 可以在   https://console.bce.baidu.com/ai/ 申请。
> 其他详细使用方法请参照官方文档 https://ai.baidu.com/ai-doc/FACE/zk37c1qrv

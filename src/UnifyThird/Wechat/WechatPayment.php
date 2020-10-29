<?php
namespace UnifyThird\Wechat;
use UnifyThird\Strategy;

class WechatPayment extends Strategy
{
    protected function __construct()
    {
        var_dump(self::$init);
        var_dump(self::$args);
        echo "单例模式的WechatPayment被构造了";
        //$this->app = Factory::payment(self::$init);
    }
}
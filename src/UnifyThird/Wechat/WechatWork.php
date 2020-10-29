<?php
namespace UnifyThird\Wechat;
use UnifyThird\Strategy;

class WechatWork extends Strategy
{
    protected function __construct()
    {
        var_dump(self::$init);
        var_dump(self::$args);
        echo "单例模式的WechatWork被构造了";
        //$this->app = Factory::work(self::$init);
    }
}
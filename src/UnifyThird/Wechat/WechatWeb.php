<?php

namespace UnifyThird\Wechat;

use UnifyThird\Strategy;

class WechatWeb extends Strategy
{
    protected function __construct()
    {
        var_dump(self::$init);
        var_dump(self::$args);
        //$this->app = Factory::officialAccount(self::$init);
        echo "单例模式的Wechat被构造了";
    }

    public function auth()
    {
        return 'token';
    }

}
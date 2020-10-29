<?php

namespace UnifyThird\Wechat;

use UnifyThird\Strategy;
use EasyWeChat\Factory;

class WechatMini extends Strategy
{
    protected function __construct()
    {
        echo "单例模式的WechatMini被构造了" . PHP_EOL;

        $this->app = Factory::miniProgram(self::$init);
    }
}
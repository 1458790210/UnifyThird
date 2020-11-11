<?php

namespace UnifyThird\Wechat;

use UnifyThird\Strategy;
use EasyWeChat\Factory;

class WechatMini extends Strategy
{
    protected function __construct()
    {
        $this->app = Factory::miniProgram(self::$init);
    }

    public function __call($name, $arguments)
    {
        return $this->WechatCall($arguments[0]);
    }
}
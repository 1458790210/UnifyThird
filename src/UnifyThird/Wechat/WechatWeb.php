<?php

namespace UnifyThird\Wechat;

use UnifyThird\Strategy;
use EasyWeChat\Factory;

class WechatWeb extends Strategy
{
    protected function __construct()
    {
        $this->app = Factory::officialAccount(self::$init);
    }

    public function __call($name, $arguments)
    {
        return $this->WechatCall($arguments[0]);
    }
}
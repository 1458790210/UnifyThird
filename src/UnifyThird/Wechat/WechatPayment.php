<?php
namespace UnifyThird\Wechat;

use UnifyThird\Strategy;
use EasyWeChat\Factory;

class WechatPayment extends Strategy
{
    protected function __construct()
    {
        $this->app = Factory::payment(self::$init);
    }
}
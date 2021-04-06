<?php

namespace UnifyThird\Wechat;

use UnifyThird\Factor;

class WechatFactor extends Factor
{
    public static function getInstance()
    {
        if (self::$args == 'mini') {
            return WechatMini::getInstance();
        }
        if (self::$args == 'web') {
            return WechatWeb::getInstance();
        }
        if (self::$args == 'work') {
            return WechatWork::getInstance();
        }
        if (self::$args == 'payment') {
            return WechatPayment::getInstance();
        }
        if (self::$args == 'openPlatform') {
            return WechatOpenPlatform::getInstance();
        }
        if (self::$args == 'openWork') {
            return WechatOpenWork::getInstance();
        }
        if (self::$args == 'microMerchant') {
            return WechatMicroMerchant::getInstance();
        }
    }
}
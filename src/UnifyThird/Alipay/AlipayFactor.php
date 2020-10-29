<?php

namespace UnifyThird\Alipay;

use UnifyThird\Factor;

class AlipayFactor extends Factor
{
    public static function getInstance()
    {
        if (self::$args == 'base') {
            return AlipayBase::getInstance();
        }
        if (self::$args == 'cert') {
            return AlipayCert::getInstance();
        }
    }
}
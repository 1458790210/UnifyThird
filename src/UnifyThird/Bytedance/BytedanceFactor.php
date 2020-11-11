<?php

namespace UnifyThird\Bytedance;

use UnifyThird\Factor;

class BytedanceFactor extends Factor
{
    public static function getInstance()
    {
        if (self::$args == 'mini') {
            return BytedanceMini::getInstance();
        }
    }
}
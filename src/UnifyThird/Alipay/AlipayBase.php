<?php

namespace UnifyThird\Alipay;

use UnifyThird\Strategy;

require_once 'aop/AopClient.php';

class AlipayBase extends Strategy
{
    protected function __construct()
    {
        echo "单例模式的AlipayBase被构造了" . PHP_EOL;
        $aop = new \AopClient();
        $this->AliPayConstruct($aop);
    }

    public function __call($name, $arguments)
    {
        return $this->AliPayCall($name);
    }
}
<?php

namespace UnifyThird\Alipay;

use UnifyThird\Strategy;

require_once 'aop\AopCertClient.php';

class AlipayCert extends Strategy
{
    protected function __construct()
    {
        echo "单例模式的AlipayCert被构造了" . PHP_EOL;
        $aop = new \AopCertClient();
        $this->AliPayConstruct($aop);
    }

    public function __call($name, $arguments)
    {
        return $this->AliPayCall($name);
    }
}
<?php

namespace UnifyThird\Alipay;

use AopCertClient;
use UnifyThird\Strategy;

class AlipayCert extends Strategy
{

    public function __call($name, $arguments)
    {
        $aop = new AopCertClient();
        $aop->gatewayUrl = self::$init['gatewayUrl'];
        $aop->appId = self::$init['appId'];
        $aop->rsaPrivateKey = self::$init['rsaPrivateKey'];
        $aop->alipayrsaPublicKey = self::$init['alipayrsaPublicKey'];
        $aop->apiVersion = self::$init['apiVersion'];
        $aop->signType = self::$init['signType'];
        $aop->postCharset = self::$init['postCharset'];
        $aop->format = self::$init['format'];
    }
}
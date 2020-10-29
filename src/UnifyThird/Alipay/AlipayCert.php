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
        //调用getPublicKey从支付宝公钥证书中提取公钥
        $this->app->alipayrsaPublicKey = $this->app->getPublicKey(self::$init['alipayCertPath']);
        //是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
        $this->app->isCheckAlipayPublicCert = true;
        //调用getCertSN获取证书序列号
        $this->app->appCertSN = $this->app->getCertSN(self::$init['appCertPath']);
        //调用getRootCertSN获取支付宝根证书序列号
        $this->app->alipayRootCertSN = $this->app->getRootCertSN(self::$init['rootCertPath']);
    }

    public function __call($name, $arguments)
    {
        return $this->AliPayCall($name);
    }
}
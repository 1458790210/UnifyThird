<?php

namespace UnifyThird\Alipay;

use UnifyThird\Strategy;

class AlipayBase extends Strategy
{
    protected function __construct()
    {
        require_once 'aop\AopClient.php';
        echo "单例模式的AlipayBase被构造了" . PHP_EOL;
        $aop = new \AopClient();
        $aop->gatewayUrl = self::$init['gatewayUrl'];
        $aop->appId = self::$init['appId'];
        $aop->rsaPrivateKey = self::$init['rsaPrivateKey'];
        $aop->alipayrsaPublicKey = self::$init['alipayrsaPublicKey'];
        $aop->apiVersion = self::$init['apiVersion'];
        $aop->signType = self::$init['signType'];
        $aop->postCharset = self::$init['postCharset'];
        $aop->format = self::$init['format'];
        $this->app = $aop;
    }

    public function __call($name, $arguments)
    {
        $method = '';
        $arr = explode('.', $name);
        foreach ($arr as $value) {
            $method .= ucfirst($value);
        }
        require_once 'aop\request\AlipayTradeQueryRequest.php';
        $request = $method . 'Request';
        $request = new $request();
        $request->setBizContent("{" .
                                "\"out_trade_no\":\"20150320010101001\"," .
                                "\"trade_no\":\"2014112611001004680 073956707\"," .
                                "\"org_pid\":\"2088101117952222\"," .
                                "      \"query_options\":[" .
                                "        \"TRADE_SETTE_INFO\"" .
                                "      ]" .
                                "  }");
        return $this->app->execute($request);
    }
}
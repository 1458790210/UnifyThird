<?php

namespace UnifyThird;

abstract class Strategy
{
    use SingletonTrait;

    public static $init;
    public static $args;
    public $app;

    public function __call($name, $arguments)
    {
        return $this->add($arguments[0]);
    }

    public function add($arr)
    {
        $r = $this->app;
        foreach ($arr as $k => $v) {
            if ($v == end($arr)) {
                $r = $r->$v(self::$args);
            } else {
                $r = $r->$v;
            }
        }
        return $r;
    }

    protected function AliPayConstruct($aop)
    {
        $aop->gatewayUrl = self::$init['gatewayUrl'];
        $aop->appId = self::$init['appId'];
        $aop->encryptKey = self::$init['encryptKey'];
        $aop->rsaPrivateKey = self::$init['rsaPrivateKey'];
        $aop->alipayPublicKey = self::$init['alipayPublicKey'];
        $aop->debugInfo = self::$init['debugInfo'];
        $aop->alipayrsaPublicKey = self::$init['alipayrsaPublicKey'];
        $aop->apiVersion = self::$init['apiVersion'];
        $aop->signType = self::$init['signType'];
        $aop->postCharset = self::$init['postCharset'];
        $aop->format = self::$init['format'];
        $this->app = $aop;
    }

    protected function AliPayCall($name)
    {
        $method = '';
        $arr = explode('.', $name);
        foreach ($arr as $value) {
            $method .= ucfirst($value);
        }
        require_once 'Alipay/aop/request/AlipayOpenAppQrcodeCreateRequest.php';
        $request = $method . 'Request';
        $request = new $request();
        $request->setBizContent(self::$args);
        $result = $this->app->execute($request);
        return json_decode(json_encode($result), true);
    }

}
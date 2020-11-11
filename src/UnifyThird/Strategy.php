<?php

namespace UnifyThird;

abstract class Strategy
{
    use SingletonTrait;

    public static $init;
    public static $args;
    public static $headers;
    public $app;

    protected function WechatCall($arr)
    {
        $result = $this->app;
        $args   = self::$args;
        foreach ($arr as $k => $v) {
            if ($v == end($arr)) {
                $result = $result->$v(...$args);
            } else {
                $result = $result->$v;
            }
        }
        if ($result['errcode'] ?? 0) {
            return Response::error($result['errcode'], $result['errmsg']);
        }
        return Response::success($result);
    }

    protected function AliPayConstruct($aop)
    {
        $aop->gatewayUrl         = self::$init['gatewayUrl'];
        $aop->appId              = self::$init['appId'];
        $aop->encryptKey         = self::$init['encryptKey'];
        $aop->rsaPrivateKey      = self::$init['rsaPrivateKey'];
        $aop->alipayPublicKey    = self::$init['alipayPublicKey'];
        $aop->debugInfo          = self::$init['debugInfo'];
        $aop->alipayrsaPublicKey = self::$init['alipayrsaPublicKey'];
        $aop->apiVersion         = self::$init['apiVersion'];
        $aop->signType           = self::$init['signType'];
        $aop->postCharset        = self::$init['postCharset'];
        $aop->format             = self::$init['format'];
        $this->app               = $aop;
    }

    protected function AliPayCall($name)
    {
        $method = '';
        $arr    = explode('.', $name);
        foreach ($arr as $value) {
            $method .= ucfirst($value);
        }
        require_once 'Alipay/aop/request/' . $method . 'Request.php';
        $request = $method . 'Request';
        $request = new $request();
        $request->setBizContent(self::$args);
        $result       = $this->app->execute($request);
        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode   = $result->$responseNode->code;
        if (!empty($resultCode) && $resultCode == 10000) {
            return Response::success($result->$responseNode);
        }
        return Response::error(
            $resultCode,
            $result->$responseNode->msg,
            $result->$responseNode->sub_code,
            $result->$responseNode->sub_msg
        );
    }

    protected function BytedanceCall($name)
    {
        $method = '';
        $arr    = explode('.', $name);
        foreach ($arr as $value) {
            $method .= ucfirst($value);
        }
        $request = 'Bytedance\Request\\' . $method;
        $request = new $request();
        $result  = $this->app->request($request, self::$args);
        $result  = json_decode($result->body, true);
        if (($result['errcode'] ?? 0) || ($result['error_id'] ?? '') || ($result['err_no'] ?? '')) {
            if ($result['error_id'] ?? '') {
                $result['errcode'] = $result['code'];
                $result['errmsg']  = $result['message'];
                $result['error']   = $result['error_id'];
                $result['message'] = $result['exception'];
            }
            if ($result['err_no'] ?? 0) {
                $result['errcode'] = $result['err_no'];
                $result['errmsg']  = $result['err_tips'];
            }
            return Response::error($result['errcode'], $result['errmsg'], $result['error'], $result['message']);
        }
        return Response::success($result);
    }
}
<?php

namespace UnifyThird;

/**
 * 三方统一调用
 * Class ThirdService
 */
class ThirdService
{
    public static $third;
    public static $init;

    public function __construct($init = null)
    {
        self::$init = $init;
    }

    public static function getInstance($third, $method, $args = null)
    {
        try {
            Strategy::$init = self::$init[$third];
            Strategy::$args = $args;
            $third = explode('_', $third);
            Factor::$args = $third[1] ?? '';
            $factor = ("UnifyThird\\" . $third[0] . "\\" . $third[0] . 'Factor');
            self::$third = $factor::getInstance();

            if (is_array($method)) {
                $function = $method[0];
                return self::$third->$function($method);
            }
        } catch (RequestException $e) {
            throw new RequestException('message: ' . $e->getMessage() . ' code: ' . $e->getCode());
        }
    }

    public static function __callStatic($func, $param)
    {
        throw new RequestException("统一调用方法错误");
    }
}
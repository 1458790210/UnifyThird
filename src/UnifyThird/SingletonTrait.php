<?php

namespace UnifyThird;

Trait SingletonTrait
{
    //存放实例
    protected static $_instance = null;

    //私有化克隆方法
    private function __clone()
    {

    }

    //公有化获取实例方法
    public static function getInstance()
    {
        if (!static::$_instance instanceof static) {
            static::$_instance = new static(...func_get_args());
        }
        return static::$_instance;
    }
}
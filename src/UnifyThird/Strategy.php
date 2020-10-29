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
}
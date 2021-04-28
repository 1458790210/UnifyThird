<?php

namespace UnifyThird\Bytedance;

use Bytedance\Http\Client;
use UnifyThird\Strategy;

class BytedanceMini extends Strategy
{
    protected function __construct()
    {
        $this->app = Client::instance();
        $this->app->setConfig(self::$init);
        $this->app->setHeaders(self::$headers);
    }

    public function __call($name, $arguments)
    {
        return $this->BytedanceCall($name);
    }
}
<?php

namespace UnifyThird;

abstract class Factor
{
    public static $args;

    abstract public static function getInstance();
}
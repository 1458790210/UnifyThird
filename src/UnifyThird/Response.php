<?php

namespace UnifyThird;

class Response
{
    public static function success($body)
    {
        return $body;
    }

    public static function error($code, $msg, $sub_code = '', $sub_msg = '')
    {
        return ['code' => $code, 'msg' => $msg, 'sub_code' => $sub_code, 'sub_msg' => $sub_msg];
    }
}
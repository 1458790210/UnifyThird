<?php
return [
    'Wechat_mini' => [
        'app_id'        => '',
        'secret'        => '',
        'response_type' => 'array',

        'log' => [
            'level' => 'debug',
            'file'  => __DIR__ . '/wechat.log',
        ],
    ],
    'Alipay'      => [
        'gatewayUrl'         => 'https://openapi.alipay.com/gateway.do',
        'appId'              => '你的appid',
        'rsaPrivateKey'      => '你的应用私钥',
        'alipayrsaPublicKey' => '你的支付宝公钥',
        'apiVersion'         => '1.0',
        'signType'           => 'RSA2',
        'postCharset'        => 'utf-8',
        'format'             => 'json',
    ]
];
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
    'Alipay_base' => [
        'gatewayUrl'         => 'https://openapi.alipay.com/gateway.do',
        'appId'              => '',
        'apiVersion'         => '1.0',
        'signType'           => 'RSA2',
        'postCharset'        => 'utf-8',
        'encryptKey'         => '',
        'format'             => 'json',
        'alipayPublicKey'    => '',
        'debugInfo'          => false,
        'rsaPrivateKey'      => '',
        'alipayrsaPublicKey' => '',
    ]
];
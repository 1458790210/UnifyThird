<?php
return [
    'Wechat_mini' => [
        'app_id' => '',
        'secret' => '',
        'response_type' => 'array',
        'log' => [
            'level' => 'debug',
            'file' => __DIR__ . '/wechat.log',
        ],
    ],
    'Alipay_base' => [
        'gatewayUrl' => 'https://openapi.alipay.com/gateway.do',
        'appId' => '',
        'apiVersion' => '1.0',
        'signType' => 'RSA2',
        'postCharset' => 'utf-8',
        'encryptKey' => '',
        'format' => 'json',
        'alipayPublicKey' => '',
        'debugInfo' => false,
        'rsaPrivateKey' => '你的应用私钥',
        'alipayrsaPublicKey' => '你的支付宝公钥',
    ],
    'Alipay_cert' => [
        'gatewayUrl' => 'https://openapi.alipay.com/gateway.do',
        'appId' => '',
        'apiVersion' => '1.0',
        'signType' => 'RSA2',
        'postCharset' => 'utf-8',
        'encryptKey' => '',
        'format' => 'json',
        'alipayPublicKey' => '',
        'debugInfo' => false,
        'rsaPrivateKey' => '你的应用私钥',
        'alipayrsaPublicKey' => '你的支付宝公钥',
        'appCertPath' => "应用证书路径（要确保证书文件可读），例如：/home/admin/cert/appCertPublicKey.crt",
        'alipayCertPath' => "支付宝公钥证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayCertPublicKey_RSA2.crt",
        'rootCertPath' => "支付宝根证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayRootCert.crt",
    ]
];
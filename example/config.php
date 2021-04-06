<?php
return [
    //小程序
    'Wechat_mini' => [
        'app_id'        => '',
        'secret'        => '',
        'response_type' => 'array',
        'log'           => [
            'level' => 'debug',
            'file'  => __DIR__ . '/wechat.log',
        ],
    ],
    //公众号
    'Wechat_web'  => [
        'app_id'        => '',
        'secret'        => '',

        // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
        'response_type' => 'array',
    ],
    //微信开放平台第三方平台
    'Wechat_openPlatform'  => [
        'app_id'  => '开放平台第三方平台 APPID',
        'secret'  => '开放平台第三方平台 Secret',
        'token'   => '开放平台第三方平台 Token',
        'aes_key' => '开放平台第三方平台 AES Key',
    ],
    //企业微信第三方服务商
    'Wechat_openWork'      => [
        'corp_id'              => '服务商的corpid',
        'secret'               => '服务商的secret，在服务商管理后台可见',
        'suite_id'             => '以ww或wx开头应用id',
        'suite_secret'         => '应用secret',
        'token'                => '应用的Token',
        'aes_key'              => '应用的EncodingAESKey',
        'reg_template_id'      => '注册定制化模板ID',
        'redirect_uri_install' => '安装应用的回调url（可选）',
        'redirect_uri_single'  => '单点登录回调url （可选）',
        'redirect_uri_oauth'   => '网页授权第三方回调url （可选）',
    ],
    //小微商户
    'Wechat_microMerchant' => [
        // 必要配置
        'mch_id'        => 'your-mch-id', // 服务商的商户号
        'key'           => 'key-for-signature', // API 密钥
        'apiv3_key'     => 'APIv3-key-for-signature', // APIv3 密钥
        // API 证书路径(登录商户平台下载 API 证书)
        'cert_path'     => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
        'key_path'      => 'path/to/your/key', // XXX: 绝对路径！！！！
        // 以下两项配置在获取证书接口时可为空，在调用入驻接口前请先调用获取证书接口获取以下两项配置,如果获取过证书可以直接在这里配置，也可参照本文档获取平台证书章节中示例
        // 'serial_no'     => '获取证书接口获取到的平台证书序列号',
        // 'certificate'   => '获取证书接口获取到的证书内容'

        // 以下为可选项
        // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
        'response_type' => 'array',
        'appid'         => '' // 服务商的公众账号 ID
    ],
    //企业微信
    'Wechat_work'          => [
        'corp_id' => '',

        'agent_id'      => 100020, // 如果有 agend_id 则填写
        'secret'        => '',

        // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
        'response_type' => 'array',

        'log' => [
            'level' => 'debug',
            'file'  => __DIR__ . '/wechat.log',
        ],
    ],
    //微信支付
    'Wechat_payment'       => [
        // 必要配置
        'app_id'    => '',
        'mch_id'    => '',
        'key'       => '',   // API 密钥

        // 如需使用敏感接口（如退款、发送红包等）需要配置 API 证书路径(登录商户平台下载 API 证书)
        'cert_path' => '',      // XXX: 绝对路径 或者 证书cert_path内容
        'key_path'  => '',      // XXX: 绝对路径 或者 证书key_path内容

        'notify_url' => '默认的订单回调地址',     // 你也可以在下单时单独设置来想覆盖它
    ],
    //支付宝应用
    'Alipay_base'          => [
        'gatewayUrl'         => 'https://openapi.alipay.com/gateway.do',
        'appId'              => '',
        'apiVersion'         => '1.0',
        'signType'           => 'RSA2',
        'postCharset'        => 'utf-8',
        'encryptKey'         => '',
        'format'             => 'json',
        'alipayPublicKey'    => '',
        'debugInfo'          => false,
        'rsaPrivateKey'      => '你的应用私钥',
        'alipayrsaPublicKey' => '你的支付宝公钥',
    ],
    //支付宝应用带证书
    'Alipay_cert'          => [
        'gatewayUrl'         => 'https://openapi.alipay.com/gateway.do',
        'appId'              => '',
        'apiVersion'         => '1.0',
        'signType'           => 'RSA2',
        'postCharset'        => 'utf-8',
        'encryptKey'         => '',
        'format'             => 'json',
        'alipayPublicKey'    => '',
        'debugInfo'          => false,
        'rsaPrivateKey'      => '你的应用私钥',
        'alipayrsaPublicKey' => '你的支付宝公钥',
        'appCertPath'        => "应用证书路径（要确保证书文件可读），例如：/home/admin/cert/appCertPublicKey.crt",
        'alipayCertPath'     => "支付宝公钥证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayCertPublicKey_RSA2.crt",
        'rootCertPath'       => "支付宝根证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayRootCert.crt",
    ],
    //头条
    'Bytedance_mini'       => [
        'appid'      => '',
        'secret'     => '',
        'grant_type' => 'client_credential',
    ],
];
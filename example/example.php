<?php
require_once "../vendor/autoload.php";

use UnifyThird\ThirdService;

$config = require_once 'config.php';
$t      = ThirdService::$init = $config;
//$thirdService = new ThirdService($config);


//$r = ThirdService::getInstance('Alipay_base', ['alipay.open.app.qrcode.create'], "{" .
//                                                                                 "\"url_param\":\"page/component/component-pages/view/view\"," .
//                                                                                 "\"query_param\":\"x=1\"," .
//                                                                                 "\"describe\":\"二维码描述\"" .
//                                                                                 "  }");

$r = ThirdService::getInstance('Wechat_mini', ['data_cube', 'summaryTrend'], ['20201001', '20201001']);

//$r = ThirdService::getInstance('Wechat_payment',['order','queryByOutTradeNumber'],['20210404130157535751979810']);

//$r = ThirdService::getInstance('Wechat_payment',['bill','get'],['20210403']);
//$r->saveAs("D:\\", 'file-20210403.csv');

//$fun = function ($message, $fail) {
//    // 你的逻辑
//    return true;
//    // 或者错误消息
//    $fail('Order not exists.');
//};
//$tt = ThirdService::getInstance('Wechat_payment', ['handlePaidNotify'],
//    [$fun]);

//$r = ThirdService::getInstance('Wechat_openPlatform',['getAuthorizer'],['20210403']);

//$r = ThirdService::getInstance('Bytedance_mini', ['GetAccessToken']);

//$r = ThirdService::getInstance('Bytedance_mini', ['Antidirt'], ['tasks' => [['content' => '你好']], 'content' => '你好'], ['X-Token' => '']);
var_dump($r);
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

//$r = ThirdService::getInstance('Wechat_mini', ['data_cube', 'summaryTrend'], ['20201001', '20201001']);

$r = ThirdService::getInstance('Bytedance_mini', ['GetAccessToken'], $config['Bytedance_mini']);

//$r = ThirdService::getInstance('Bytedance_mini', ['Antidirt'], ['tasks' => [['content' => '你好']], 'content' => '你好'], ['X-Token' => '']);
var_dump($r);
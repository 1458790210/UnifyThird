<?php
require_once "../vendor/autoload.php";

use UnifyThird\ThirdService;

$config = require_once 'config.php';
$t      = ThirdService::$init = $config;
//$r = ThirdService::getInstance('Alipay_base', ['alipay.open.app.qrcode.create'], "{" .
//                                                                                 "\"url_param\":\"page/component/component-pages/view/view\"," .
//                                                                                 "\"query_param\":\"x=1\"," .
//                                                                                 "\"describe\":\"二维码描述\"" .
//                                                                                 "  }");
$r = ThirdService::getInstance('Wechat_mini', ['data_cube', 'summaryTrend'], ['20201001', '20201001']);
var_dump($r);
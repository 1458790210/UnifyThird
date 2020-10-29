<?php
require_once "../vendor/autoload.php";

use UnifyThird\ThirdService;

$config = require_once 'config.php';
$t = ThirdService::$init = $config;
$r = ThirdService::getInstance('Alipay_base', ['alipay.trade.query'], '093iCd1w3FW9bV2qSX1w35ZirY3iCd1e');
//$r = ThirdService::getInstance('Wechat_mini', ['auth', 'session'], '093iCd1w3FW9bV2qSX1w35ZirY3iCd1e');
var_dump($r);
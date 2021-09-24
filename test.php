<?php
require "vendor/autoload.php";

$url_info = \Lucifer\Domain::parseUrl('baidu.com');

$is_cdn = \Lucifer\Domain::isCdn('xincache9.cn');

var_dump($is_cdn);
var_dump($url_info);exit;
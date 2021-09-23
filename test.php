<?php
require "vendor/autoload.php";

$url_info = \Lucifer\Domain::parseUrl('baidu.com');

var_dump($url_info);exit;
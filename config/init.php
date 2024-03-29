<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("TMP", ROOT . '/tmp');
define("VENDOR", ROOT . '/vendor');
define("CORE", VENDOR . '/shop/core');
define("LIBS", VENDOR . '/shop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'watches');

// http://site-name.com/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://site-name.com/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://site-name.com/
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once VENDOR . '/autoload.php';
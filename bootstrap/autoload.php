<?php
/*
Register The Composer Auto Loader
*/

define("BASE_PATH", __DIR__ . '/../');
/*
Autoload Route 
*/
//include __DIR__.'/../config/config.php';
require __DIR__.'/../vendor/autoload.php';
$helper = new WP\Helpers\Helper;
$app = new WP\Routes\Route;
$app->init();




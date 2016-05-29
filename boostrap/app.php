<?php
/**
 * Created by PhpStorm.
 * User: zhuyongxuan1
 * Date: 16/5/29
 * Time: 下午8:37
 */

require __DIR__ . '/../vendor/autoload.php';

session_start();

$config['displayErrorDetails'] = true;

$config['db']['host']   = "localhost";
$config['db']['user']   = "user";
$config['db']['pass']   = "password";
$config['db']['dbname'] = "exampleapp";

$app = new \Slim\App(["settings" => $config]);

require __DIR__ . '/../app/route.php';


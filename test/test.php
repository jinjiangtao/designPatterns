<?php
/**
 * Created by PhpStorm.
 * User: jiangtao
 * Date: 18/10/29
 * Time: 上午10:52
 */
require "../vendor/autoload.php";

use  DesignPatterns\SimpleFactory\SimpleFactory;

$obj = new SimpleFactory();
$obj->test();

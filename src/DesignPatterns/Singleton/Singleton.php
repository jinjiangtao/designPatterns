<?php
/**
 * Created by PhpStorm.
 * User: jiangtao
 * Date: 18/10/29
 * Time: 上午9:01
 */
namespace DesignPatterns\Singleton;

class Singleton
{
    public static $singleObj = null;

    public static function getSinleton()
    {
        if( self::$singleObj == null) {
            self::$singleObj = new Singleton();
        }
        return self::$singleObj;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }
}

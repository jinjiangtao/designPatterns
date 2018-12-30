<?php
/**
 * Created by PhpStorm.
 * User: jiangtao
 * Date: 18/10/29
 * Time: 上午11:46
 */
namespace App\tests;
require_once __DIR__ . '/../vendor/autoload.php';
define("ROOT_PATH", dirname(__DIR__) . "/");

use DesignPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $firstCall =
        $this->assertEquals(1, 1);
    }

    public function Log()
    {
        // create a log channel
        $log = new Logger('Tester');
        $log->pushHandler(new StreamHandler(ROOT_PATH . 'storage/logs/singletonTest.log', Logger::WARNING));
        $log->error("Error");
        return $log;
    }

    /**
     * 猴子选大王
     */
    public function testMonkey()
    {
        function findMonkeyKing($n ,$m){
            $arr = range(1,$n);
            $i = 1;
            while(count($arr)>1){
                ($i % $m != 0) && array_push($arr,$arr[$i-1]);
                unset($arr[$i-1]);
                $i++;
            }
            return $arr[$i-1];
        }

        function yuesefu($n,$m) {
            $r=0;
            for($i=2; $i<=$n; $i++) {
                $r=($r+$m)%$i;
            }
            return $r+1;
        }

    }
}




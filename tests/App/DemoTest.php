<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  : 
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use PHPUnit\Framework\TestCase;
use App\App\Demo;
use App\Util\HttpRequest;
use App\Service\AppLogger;


class DemoTest extends TestCase 
{

    public function testUserInfo() 
    {
        $curl = new HttpRequest;
        $logger = new AppLogger;
        $userInfo = (new Demo($logger,$curl))->get_user_info();
        $this->assertEquals(1,  $userInfo['id']);
    }
}
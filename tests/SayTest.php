<?php
/**
 * Created by PhpStorm.
 * User: baia
 * Date: 2018/8/4
 * Time: 下午3:52.
 */

namespace Baiachen\Say\Test;

use Baiachen\Say\Say;
use PHPUnit\Framework\TestCase;

class SayTest extends TestCase
{
    /** @test */
    public function 想说什么说什么()
    {
        //arrange
        $something = Say::hi('说些什么吧');

        //act
        $act = 'Hello World. 说些什么吧';

        //assert
        $this->assertSame($act, $something);
    }
}

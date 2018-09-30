<?php
/**
 * Created by PhpStorm.
 * User: baia
 * Date: 2018/8/4
 * Time: 下午3:46.
 */

namespace Baiachen\Say;

class Say
{
    public static function hi(string $string)
    {
        return sprintf('Hello World. %s', $string);
    }
}

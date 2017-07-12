<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/12
 * Time: 14:17
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
     //状态码
    public $code = 404;
    //错误信息
    public $msg = 'theme not found';
    //自定义状态码
    public $errorCode = 30000;
}
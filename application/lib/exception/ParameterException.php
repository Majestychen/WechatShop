<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/30
 * Time: 13:43
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    //状态码
    public $code = 400;
    //错误信息
    public $msg = 'invalid parameters';
    //自定义状态码
    public $errorCode = 10000;
}
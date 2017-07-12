<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/12
 * Time: 15:32
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    //状态码
    public $code = 400;
    //错误信息
    public $msg = '查询商品不存在，请检查参数';
    //自定义状态码
    public $errorCode = 20000;

}
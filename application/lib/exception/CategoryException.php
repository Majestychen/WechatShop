<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/12
 * Time: 16:33
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    //状态码
    public $code = 400;
    //错误信息
    public $msg = '商品分类不存在';
    //自定义状态码
    public $errorCode = 50000;
}
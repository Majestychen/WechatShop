<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 16:01
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{

    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
    protected $message = [
        'id' => 'ID必须是正整数！'
    ];


}
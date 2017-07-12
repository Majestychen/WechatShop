<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/12
 * Time: 15:20
 */

namespace app\api\validate;


class Count extends BaseValidate
{

    protected $rule = [
        'count' => 'between:1,15|isPositiveInteger'
    ];
}
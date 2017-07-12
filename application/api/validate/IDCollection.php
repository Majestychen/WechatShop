<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/10
 * Time: 9:57
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids必须是逗号间隔的正整数',
    ];

    protected function checkIDs($value)
    {
        $values = explode(',', $value);

        if (empty($values)) {
            return false;
        }
        foreach ($values as $key => $id) {
            if (!$this->isPositiveInteger($id)) {
                return false;
            }
        }
        return true;
    }
}
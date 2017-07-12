<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 16:27
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if (!$result) {
            $e = new ParameterException(
                [
                    'msg' => $this->error,
                ]
            );
            throw $e;
        } else {
            return true;
        }
    }

    /**
     * function:验证输入数据是否是正整数
     * @url
     * @http
     * @param
     * @author yumeng <yumengkj@yeah.net>
     */
    protected function isPositiveInteger($value, $rule = '', $date = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/10
 * Time: 9:11
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    /**
     * function:封装url
     * @param
     * @author yumeng <yumengkj@yeah.net>
     */
    protected function prefixImgUrl($value, $data)
    {
        if ($data['from'] == 1)
            return config('setting.img_prefix') . $value;
        else
            return $value;
    }
}
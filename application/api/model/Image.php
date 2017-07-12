<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/7
 * Time: 9:41
 */

namespace app\api\model;


class Image extends BaseModel
{
    protected $hidden = ['id', 'delete_time', 'update_time', 'from'];

    public function getUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 16:54
 */

namespace app\api\model;



class BannerItem extends BaseModel
{

    protected $hidden = ['id','img_id','banner_id','update_time','delete_time'];

    public function img()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}
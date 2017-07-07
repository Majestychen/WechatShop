<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 16:54
 */

namespace app\api\model;

use think\Model;

class BannerItem extends Model
{
public function img(){
    return $this->belongsTo('Image','img_id','id');
}
}
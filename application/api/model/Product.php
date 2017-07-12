<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/7/10
 * Time: 9:42
 */

namespace app\api\model;


class Product extends BaseModel
{

    protected $hidden = [
        'delete_time','main_img_id','pivot','from','category_id','update_time','create_time'
    ];
}
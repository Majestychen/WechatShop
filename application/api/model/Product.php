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
        'delete_time', 'main_img_id', 'pivot', 'from', 'category_id', 'update_time', 'create_time'
    ];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    public static function getMostRecent($count)
    {
        $products = self::limit($count)->order('create_time desc')->select();
        return $products;

    }

    public static function getAllByCategoryID($categoryID)
    {
        $products = self::where('category_id', '=', $categoryID)->select();
        return $products;
    }
}
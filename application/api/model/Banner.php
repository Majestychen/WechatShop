<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 16:54
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    /**
     * function:获取banner信息
     * @author yumeng <yumengkj@yeah.net>
     */
    public static function getBannerByID($id)
    {
        $result = Db::table('banner_item')
            ->where(function ($query) use ($id) {
                $query->where('banner_id', '=', $id);
            })
            ->select();
        return $result;
    }
}
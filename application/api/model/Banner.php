<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 16:54
 */

namespace app\api\model;



class Banner extends BaseModel
{
    protected $hidden = ['delete_time', 'update_time'];

    /**
     * function:关联映射
     * @author yumeng <yumengkj@yeah.net>
     */
    public function items()
    {
        return $this->hasMany("BannerItem", 'banner_id', 'id');
    }

    /**
     * function:获取banner信息
     * @author yumeng <yumengkj@yeah.net>
     */
    public static function getBannerByID($id)
    {
        $banner = self::with(['items', 'items.img'])->find($id);
        return $banner;
    }
}
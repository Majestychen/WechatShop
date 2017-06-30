<?php
/**
 * Created by PhpStorm.
 * User: Hongwei Yang
 * Date: 2017/6/29
 * Time: 15:27
 */

namespace app\api\controller\v1;



use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;



class Banner
{
    /**
     * function:获取指定的banner信息
     * @url /banner/:id
     * @http GET
     * @param $id
     * @author yumeng <yumengkj@yeah.net>
     */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->gocheck();
        $banner = BannerModel::getBannerByID($id);
        if (!$banner) {
            throw  new BannerMissException();
        }
        return $banner;

    }
}
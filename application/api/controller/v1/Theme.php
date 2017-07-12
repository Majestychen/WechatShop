<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;


class Theme
{

    /**
     * function:获得一组简单的主题列表
     * @url /theme?ids=id1,id2,..
     * @http
     * @param
     * @author yumeng <yumengkj@yeah.net>
     */
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if (!$result) {
            throw new ThemeException();
        }
        return $result;
    }

    /**
     * function:获取单个主题详情
     * @url
     * @http
     * @param
     * @author yumeng <yumengkj@yeah.net>
     */
    public function getComplexOne($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $theme= ThemeModel::getThemeWithProducts($id);
        if (!$theme) {
            throw new ThemeException();
        }
        return $theme;
    }

}

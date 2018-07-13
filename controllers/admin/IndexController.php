<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19
 * Time: 14:52
 */
namespace app\controllers\admin;

use app\components\BaseController;


class IndexController extends BaseController{

    //后台首页；
    //http://localhost/yii/web/index.php?r=admin/index/home
    public function actionHome(){

        return $this->render('index.html',array(
            'home'=>'home2018',
            'admin'=>'zhulei123',
            'title'=>'22222'
        ));

    }

}
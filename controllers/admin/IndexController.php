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

    public function actionHome(){
//        echo phpinfo();die;

        echo 'this is home';

        return $this->render('index.tpl',array(
            'home'=>'home2018',
            'admin'=>'zhulei123'
        ));
    }

}
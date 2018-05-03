<?php
namespace app\controllers\admin;

use app\components\BaseController;
use app\models\admin\DealModel;
use yii;

class DealController extends BaseController{

    public function actionIndex(){
        echo 222;
    }


    //列表页；
    public function actionGetDeals(){

        $this->module  =  new DealModel();
        $res = $this->module->getDeals();
        echo 111;


    }

    //新增；
    public function actionNewDeal(){

        return $this->render('deal_new.html',array(
            'home'=>'home2018',
            'admin'=>'zhulei123',
            'title'=>'22222'
        ));

    }


    //修改；
    public function actionUpdateDeal(){

    }

    //删除；
    public function actionDeleteDeal(){

    }

    //info；
    public function actionDealInfo(){

    }

}
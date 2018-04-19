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
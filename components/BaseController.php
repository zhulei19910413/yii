<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19
 * Time: 15:01
 */

namespace app\components;

use Yii;

use common\helpers\Url;
use yii\base\Controller;


class BaseController extends Controller{

    public $request;
    public $session;
    public $view;
    public $city;

    public function init(){

        parent::init();
        $this->request = Yii::$app->request;
        $this->session = Yii::$app->session;
        $this->view = Yii::$app->view;
        if (!$this->session->isActive)
            // open a session
            $this->session->open();

        $this->city  = Yii::$app->params['citylist'];

    }

    public function redirect($url){

        Yii::$app->getResponse()->redirect($url);

    }


}
<?php
/**
 * Created by PhpStorm.
 * User: dealmoon
 * Date: 2018/8/2
 * Time: 15:36
 */
namespace app\controllers\admin;

use app\components\BaseController;
use app\models\admin\LoginModel;
use yii\helpers\Url;

class LoginController extends BaseController {

    public function actionIndex(){
        return $this->render('login.html',array(
            'test'=> '',
        ));

    }

    public function actionLogin()
    {
        $data['username'] = $this->request->post('username');
        $data['password'] = $this->request->post('password');

        $login = new LoginModel();

        $row = $login->Geteditor($data);

        if($row){
            $url = Url::to(['admin/deal/get-deals']);
        }else{
            $url = Url::to(['admin/login']);
        }
        $this->redirect($url);
    }

}
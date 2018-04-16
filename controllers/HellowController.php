<?php
namespace app\controllers;
use yii\web\Controller;
use Yii;
use yii\web\Cookie;
use app\models\Test;


class HellowController extends Controller{

    public function actionIndex(){

        //echo "Hellow";

        $request = Yii::$app->request;


        //echo $request->userIP;


        #相应组件；
        $res = Yii::$app->response;

//        $res->statusCode = '404';

//        $res->headers->add('pragma','no-cache');
//        $res->headers->set('pragma','mxa-age=5');
//        $res->headers->remove('pragma');


        #跳转；
//        $res->statusCode = '301';
//        $res->headers->add('location','http://www.baidu.com');

//         $this->redirect('http://www.baidu.com',302);


        #文件下载；
//        $res->headers->add('content-disposition','attachment;filemame="a.jpg"');
//        $res->sendFile('./robots.txt');


        #session;
        $session = Yii::$app->session;
//        echo $session->isActive;
//        $session->set('user','zhangsan');
//        var_dump($session->get('user'));
//        $session->remove('user');

//        $session['user'] = 'zhangsan';
//        unset($session['user']);
//        var_dump($session['user']);

//        $session['user'] = 'zhangsan';
//        var_dump($session['user']);


        #cookie;
        $cookie = Yii::$app->response->cookies;

//        $arr = array('name'=>'user','value'=>'张三');
//        $cookie->add(new Cookie($arr));
//        $cookie->remove('user');

        $cook = Yii::$app->request->cookies;
        echo $cook->getValue('user',20);

        //cookie加密，配置文件/web.php文件 中的cookieValidationKey；

    }

    public function actionTest(){

        $hello = 'Hellow God!<script>alert(3);</script>';

        //creat array;
        $data = array();

        //要传递的数据，放入数组中；
        $data['view_str'] = $hello;

        //data传递给index；
        return $this->renderPartial('index',$data);

    }


    public $layout = 'common';
    public function actionTest2()
    {
//        return $this->render('test');
        return $this->render('about');
    }


    public function actionTest3(){

        //查询；
//        $sql = 'select * from test where id = 1';
//        $res = Test::findBySql($sql)->all();

        //id=1
        $res = Test::find()->where(['id'=>1])->all();

        //id>0
        $res = Test::find()->where(['>','id',0])->all();

        //id>=1 且  id<=2
        $res = Test::find()->where(['between','id',1,2])->all();

        //title like "%title1%"
        $res = Test::find()->where(['like','title','title1'])->all();


        print_r($res);

    }


}
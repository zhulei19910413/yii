<?php
namespace app\controllers\admin;

use app\components\BaseController;
use app\models\admin\DealModel;
use yii\helpers\Url;

class DealController extends BaseController{

    public function actionIndex(){

    }


    //列表页；
    public function actionGetDeals(){

        $dealModel  =  new DealModel();
        $data = $dealModel->getDeals();

        return $this->render('deal_list.html',array(
            'deallist'=> $data,
        ));

    }

    //新增；
    public function actionNewDeal(){

        return $this->render('deal_new.html',array(
            'deal'=> array('id'=>'','title'=>'','title_ex'=>'','body'=>'','note'=>'','province'=>''),
            'city'=>$this->city,
        ));

    }


    //修改；
    public function actionUpdateDeal(){

        $data['id'] = $this->request->post('id');
        $data['title'] = $this->request->post('title');
        $data['title_ex']  = $this->request->post('title_ex');
        $data['province']  = $this->request->post('province');
        $data['image_url'] = $this->request->post('image_url','test');
        $data['body'] = $this->request->post('content','');
        $data['note'] = $this->request->post('remarks','');
        $data['create_time'] = date("Y-m-d H:i:s", time());
        $dealModel  =  new DealModel();

        if(empty($data['id'])){

            //新建
            $res = $dealModel->NewDeal($data);
            if($res){
                //去列表；
                $url = Url::to(['admin/deal/get-deals']);
                $this->redirect($url);
            }else{
                echo "添加失败";
            }
        }else{

            //修改
            $res = $dealModel->updateDeal($data);
            if($res){
                //去列表；
                $url = Url::to(['admin/deal/get-deals']);
                $this->redirect($url);
            }else{
                echo "修改失败";
            }

        }


    }

    //删除；
    public function actionDeleteDeal(){

        $id = $this->request->get('id');
        $dealModel  =  new DealModel();
        $res = $dealModel->Delete($id);
        if($res){
            //去列表；
            $url = Url::to(['admin/deal/get-deals']);
            $this->redirect($url);
        }else{
            echo "删除失败";
        }

    }

    //info；
    public function actionDealInfo(){

        $id = $this->request->get('id');
        $dealModel  =  new DealModel();
        $data = $dealModel->getInfo($id);

        return $this->render('deal_new.html',array(
            'deal'=>$data,
            'city'=>$this->city,
        ));

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19
 * Time: 15:11
 */


namespace app\models\admin;
use yii;


class DealModel extends BaseModel {

    protected $table = 'deal';

    //1.
    public function GetDeals(){

        $rows = (new \yii\db\Query())
            ->select('*')
            ->from('deal')
            ->limit(20)
            ->all();

        return $rows;

    }

    //2.
    public function NewDeal($data = null){

        //[添加单条]数据
        Yii::$app->db->createCommand()->insert($this->table, [
            'title' => $data['title'],
            'title_ex' => $data['title_ex'],
            'image_url' => $data['image_url'],
            'body' => $data['body'],
            'note' => $data['note'],
            'province' => $data['province'],
            'url' => 'ning',
            'editor_id' => 1,
            'create_time' => $data['create_time'],
        ])->execute();
        //获取自增ID
        $id = Yii::$app->db->getLastInsertID();

        return $id;
    }

    //3.
    public function getInfo($id = null){

        $rows = (new \yii\db\Query())
            ->select('*')
            ->from($this->table)
            ->where("id=$id")
            ->one();

        return $rows;
    }


    //4.
    public function updateDeal($data = null){

        $res =  Yii::$app->db->createCommand()->update($this->table,
            array(
                'title'=>$data['title'],
                'title_ex'=>$data['title_ex'],
                'province'=>$data['province'],
                'image_url'=>$data['image_url'],
                'body'=>$data['body'],
                'note'=>$data['note'],
            ), "id = ".$data['id'])->execute();

        return $res;
    }


    //5.
    public function Delete($id = null){

        $res = Yii::$app->db->createCommand()->delete($this->table, "id = $id")->execute();

        return $res;
    }

}
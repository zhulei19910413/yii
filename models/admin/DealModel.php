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

    public function GetDeals(){

        $rows = (new \yii\db\Query())
            ->select('*')
            ->from('deal')
            ->limit(20)
            ->all();

        return $rows;

    }

    public function NewDeal($data = null){

        //[添加单条]数据
        Yii::$app->db->createCommand()->insert('deal', [
            'title' => $data['title'],
            'title_ex' => $data['title_ex'],
            'image_url' => $data['image_url'],
            'body' => $data['body'],
            'note' => $data['note'],
            'url' => 'ning',
            'editor_id' => 1,
            'create_time' => $data['create_time'],
            'update_time' => $data['update_time'],
        ])->execute();
        //获取自增ID
        $id = Yii::$app->db->getLastInsertID();

        return $id;
    }


    public function getInfo($id = null){

        $rows = (new \yii\db\Query())
            ->select('*')
            ->from('deal')
            ->where("id=$id")
            ->one();

        return $rows;
    }


    public function Delete($id = null){

        $res = Yii::$app->db->createCommand()->delete('deal', "id = $id")->execute();

        return $res;
    }

}
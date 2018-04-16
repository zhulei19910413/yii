<?php

namespace app\models;
use yii\db\ActiveRecord;

class Customer extends ActiveRecord{

    public function getOrders(){

        $oreder = $this->hasMany(Order::className(),['customer_id'=>'id'])->asArray()->all();

        return $oreder;
    }

}
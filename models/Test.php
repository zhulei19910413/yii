<?php

namespace app\models;
use yii\db\ActiveRecord;

class Test extends ActiveRecord{

    public function rules(){

        return[
            ['title','string'],
        ];

    }


}
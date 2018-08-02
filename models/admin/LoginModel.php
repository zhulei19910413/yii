<?php
/**
 * Created by PhpStorm.
 * User: dealmoon
 * Date: 2018/8/2
 * Time: 16:44
 */
namespace app\models\admin;
use phpDocumentor\Reflection\Types\Null_;
use yii;

class LoginModel extends BaseModel{

    protected $table = 'editor';

    public function Geteditor($data = NULL){

        $rows = (new \yii\db\Query())
            ->select('*')
            ->from($this->table)
            ->where(['uname'=>$data['username'],'password'=>$data['password']])
            ->one();

        return $rows;

    }


}
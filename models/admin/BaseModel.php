<?php
/**
 * Created by PhpStorm.
 * User: dealmoon
 * Date: 2018/7/20
 * Time: 15:26
 */

namespace app\models\admin;
use Yii;
use yii\base\Model;

class BaseModel extends Model{

    public function __construct(array $config = [])
    {
        parent::__construct($config);

    }

}
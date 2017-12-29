<?php
namespace app\models;

use Yii;
use yii\base\Model;

class MyOwnModel extends Model
{
    public $data1;
    public $data2;

    public function rules()
    {
        return [
            [['data1', 'data2'], 'required'],
            ['data2', 'email'],
        ];
    }
}

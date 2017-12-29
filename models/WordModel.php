<?php
namespace app\models;

use Yii;
use yii\base\Model;

class WordModel extends Model
{
    public $data1;

    public function rules()
    {
        return [
            ['data1', 'required'],
        ];
    }
}

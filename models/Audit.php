<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table_audit".
 *
 * @property integer $ID
 * @property string $info
 */
class Audit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table_audit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'info' => 'Info',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MenuLinks".
 *
 * @property integer $ID
 * @property string $Title
 * @property integer $ParentID
 * @property string $Content
 */
class MenuLinks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'MenuLinks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Title'], 'required'],
            [['ParentID'], 'integer'],
            [['Content'], 'string'],
            [['Title'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Title' => 'Title',
            'ParentID' => 'Parent ID',
            'Content' => 'Content',
        ];
    }
}

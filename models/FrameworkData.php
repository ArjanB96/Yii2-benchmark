<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class FrameworkData extends ActiveRecord
{
    public static function tableName()
    {
        return 'module_description';
    }

    public static function primaryKey()
    {
        return ['moduleId'];
    }

    public function rules()
    {
        return [
            [['moduleId', 'languageId'], 'required'],
            [['moduleId', 'languageId'], 'integer'],
            [['createdAt', 'updatedAt', 'deletedAt'], 'safe'],
            [['title', 'subtitle', 'description', 'buttonTitle', 'buttonLink'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'moduleId' => 'Module ID',
            'languageId' => 'Language ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'description' => 'Description',
            'buttonTitle' => 'Button Title',
            'buttonLink' => 'Button Link',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'deletedAt' => 'Deleted At',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "citys".
 *
 * @property int $id
 * @property int $region_id
 * @property string $text
 */
class Citys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'text'], 'required'],
            [['region_id'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'ID области',
            'text' => 'Город',
        ];
    }
}

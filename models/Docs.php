<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docs".
 *
 * @property int $id
 * @property string $alias
 * @property string $text_ru
 * @property string $text_kz
 */
class Docs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias', 'text_ru', 'text_kz'], 'required'],
            [['text_ru', 'text_kz'], 'string'],
            [['alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Блок',
            'text_ru' => 'Текст (ru)',
            'text_kz' => 'Текст (kz)',
        ];
    }
}

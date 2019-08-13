<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sdocs".
 *
 * @property int $id
 * @property string $link
 * @property string $text_ru
 * @property string $text_kz
 * @property int $position
 */
class Sdocs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdocs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'text_ru', 'text_kz', 'position'], 'required'],
            [['position'], 'integer'],
            [['link', 'text_ru', 'text_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Ссылка',
            'text_ru' => 'Текст (ru)',
            'text_kz' => 'Текст (kz)',
            'position' => 'Расположение',
        ];
    }
}

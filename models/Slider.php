<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $description_ru
 * @property string $title_kz
 * @property string $description_kz
 * @property string $img
 * @property string $link
 * @property int $position
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_ru', 'description_kz'], 'string'],
            [['position'], 'integer'],
            [['title_ru', 'title_kz', 'img', 'link','link_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Заголовок (ru)',
            'description_ru' => 'Описание (ru)',
            'title_kz' => 'Заголовок (kz)',
            'description_kz' => 'Заголовок (kz)',
            'img' => 'Путь к картинке',
            'link' => 'Ссылка',
            'link_kz' => 'Ссылка(kz)',
            'position' => 'Порядок показа',
        ];
    }
}

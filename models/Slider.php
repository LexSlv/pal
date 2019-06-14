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
            [['title_ru', 'title_kz', 'img', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'description_ru' => 'Description Ru',
            'title_kz' => 'Title Kz',
            'description_kz' => 'Description Kz',
            'img' => 'Img',
            'link' => 'Link',
            'position' => 'Position',
        ];
    }
}

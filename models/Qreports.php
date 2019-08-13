<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qreports".
 *
 * @property int $id
 * @property string $date
 * @property string $title_ru
 * @property string $text_ru
 * @property string $title_kz
 * @property string $text_kz
 * @property int $show
 */
class Qreports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qreports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'title_ru', 'text_ru', 'title_kz', 'text_kz', 'show'], 'required'],
            [['date'], 'safe'],
            [['text_ru', 'text_kz'], 'string'],
            [['show'], 'integer'],
            [['title_ru', 'title_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'title_ru' => 'Заголовок (ru)',
            'text_ru' => 'Текст (ru)',
            'title_kz' => 'Заголовок (kz)',
            'text_kz' => 'Текст (kz)',
            'show' => 'Показать',
        ];
    }
}

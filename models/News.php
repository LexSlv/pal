<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $date
 * @property string $alias
 * @property int $cat
 * @property string $title_ru
 * @property string $text_ru
 * @property string $title_kz
 * @property string $text_kz
 * @property string $image
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['cat'], 'integer'],
            [['text_ru', 'text_kz'], 'string'],
            [['alias', 'title_ru', 'title_kz', 'image'], 'string', 'max' => 255],
            [['image'], 'file',  'extensions' => 'png, jpg']
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
            'alias' => 'ЧПУ',
            'cat' => 'Категория',
            'title_ru' => 'Заголовок (ru)',
            'text_ru' => 'Текст (ru)',
            'title_kz' => 'Заголовок (kz)',
            'text_kz' => 'Текст (kz)',
            'image' => 'Картинка',
        ];
    }
}

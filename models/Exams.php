<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exams".
 *
 * @property int $id
 * @property string $date
 * @property string $date_ru
 * @property string $text_ru
 * @property string $date_kz
 * @property string $text_kz
 */
class Exams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'date_ru', 'text_ru', 'date_kz', 'text_kz'], 'required'],
            [['date'], 'safe'],
            [['date_ru', 'text_ru', 'date_kz', 'text_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'date_ru' => 'Date Ru',
            'text_ru' => 'Text Ru',
            'date_kz' => 'Date Kz',
            'text_kz' => 'Text Kz',
        ];
    }
}

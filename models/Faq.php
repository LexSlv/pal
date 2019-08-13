<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string $q_ru
 * @property string $a_ru
 * @property string $q_kz
 * @property string $a_kz
 * @property int $position
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_ru', 'a_ru', 'q_kz', 'a_kz'], 'string'],
            [['position'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'q_ru' => 'Вопрос (ru)',
            'a_ru' => 'Ответ (ru)',
            'q_kz' => 'Вопрос (kz)',
            'a_kz' => 'Ответ (kz)',
            'position' => 'Расположение',
        ];
    }
}

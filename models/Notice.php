<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notice".
 *
 * @property int $id
 * @property string $date
 * @property int $user_id
 * @property string $massage
 * @property int $icon
 */
class Notice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'user_id', 'massage', 'icon'], 'required'],
            [['date'], 'safe'],
            [['user_id', 'icon'], 'integer'],
            [['massage'], 'string'],
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
            'user_id' => 'Пользователь',
            'massage' => 'Сообщение',
            'icon' => 'Красное сообщение',
        ];
    }
}

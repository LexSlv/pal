<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bills".
 *
 * @property int $id
 * @property string $date
 * @property int $user_id
 * @property int $summ
 * @property int $status
 */
class Bills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'user_id', 'summ', 'status'], 'required'],
            [['date'], 'safe'],
            [['user_id', 'summ', 'status'], 'integer'],
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
            'user_id' => 'ID пользователя',
            'summ' => 'Сумма',
            'status' => 'Оплачено',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $regDate
 * @property string $bornDate
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property int $certificateNumber
 * @property string $email
 * @property int $status
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['regDate', 'bornDate', 'firstName', 'middleName', 'lastName', 'certificateNumber', 'email', 'status'], 'required'],
            [['email'],'email'],
            [['regDate', 'bornDate'], 'safe'],
            [['certificateNumber', 'status'], 'integer'],
            [['firstName', 'middleName', 'lastName', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'regDate' => 'Дата регистрации',
            'bornDate' => 'Дата рождения',
            'firstName' => 'Имя',
            'middleName' => 'Отчество',
            'lastName' => 'Фамилия',
            'certificateNumber' => 'Номер свидетельства',
            'email' => 'Email',
            'status' => 'Роль',
        ];
    }
}

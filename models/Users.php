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
            [['regDate', 'bornDate', 'password','member_status','dep_num','dep','post_index','region','city','address','phone'], 'safe'],
            [['certificateNumber', 'status', 'dep_num'], 'integer'],
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
            'member_status' => 'Степень членства',
            'dep_num' => 'Номер в реестре',
            'dep' => 'Региональная ППНО',
            'post_index' => 'Индекс',
            'region' => 'Область',
            'city' => 'Город',
            'address' => 'Адрес',
            'phone' => 'Телефон',

        ];
    }
}
